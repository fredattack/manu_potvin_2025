#!/bin/bash

# Initialisation du dépôt
if [ ! -d ".git" ]; then
    echo "Initialisation d'un nouveau dépôt Git."
    git init
fi

# Création des branches principales
BRANCH_DEVELOP="develop"
BRANCH_UAT="uat"
BRANCH_MASTER="master"

git checkout -b $BRANCH_DEVELOP
if [ $(git branch --list $BRANCH_MASTER) ]; then
    echo "Branche $BRANCH_MASTER existe déjà."
else
    git checkout --orphan $BRANCH_MASTER
    git commit --allow-empty -m "Initial commit on master"
    git push origin $BRANCH_MASTER
fi

git checkout $BRANCH_DEVELOP
if [ $(git branch --list $BRANCH_UAT) ]; then
    echo "Branche $BRANCH_UAT existe déjà."
else
    git checkout -b $BRANCH_UAT
    git push origin $BRANCH_UAT
fi

# Règles pour empêcher les commits directs sur MASTER
HOOK_DIR=".git/hooks"
PRE_COMMIT_HOOK="$HOOK_DIR/pre-commit"
PRE_PUSH_HOOK="$HOOK_DIR/pre-push"

if [ ! -d "$HOOK_DIR" ]; then
    mkdir -p "$HOOK_DIR"
fi

# Script pour bloquer les commits sur MASTER
cat <<EOL > $PRE_COMMIT_HOOK
#!/bin/bash
BRANCH=\$(git rev-parse --abbrev-ref HEAD)
if [ "\$BRANCH" = "$BRANCH_MASTER" ]; then
    echo "Les commits directs sur la branche $BRANCH_MASTER sont interdits."
    exit 1
fi
EOL

chmod +x $PRE_COMMIT_HOOK

# Script pour bloquer les pushs directs sur MASTER
cat <<EOL > $PRE_PUSH_HOOK
#!/bin/bash
while read local_ref local_sha remote_ref remote_sha
  do
    if [[ "\$remote_ref" =~ refs/heads/$BRANCH_MASTER ]]; then
        echo "Les pushs directs sur la branche $BRANCH_MASTER sont interdits."
        exit 1
    fi
done
EOL

chmod +x $PRE_PUSH_HOOK

echo "Configuration terminée. Les branches $BRANCH_DEVELOP, $BRANCH_UAT et $BRANCH_MASTER ont été créées. Les restrictions sur $BRANCH_MASTER sont en place."
