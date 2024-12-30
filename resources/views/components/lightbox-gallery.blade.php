<div class="lightbox-gallery">
    <div class="gallery">
@forelse ($images as $key => $imageUrl)
            <div class="col-lg-4 cursor-pointer">
                       <div class="thumbnail">
    <img src="{{ $imageUrl }}" alt="Image {{ $key + 1 }}" onclick="openLightbox();showSlide({{ $key + 1 }});">
            </div>
    </div>
            @empty
                                    "Pas d'images dans cette galerie"
                            @endforelse
    </div>

    <div id="lightbox" class="lightbox">
        <span class="close" onclick="closeLightbox()">&times;</span>
        <div class="lightbox-content">
            @foreach ($images as $key => $imageUrl)
                <div class="slide">
                    <img src="{{ $imageUrl }}" alt="Image {{ $key + 1 }}">
                </div>
            @endforeach
            @if(count($images) > 1)
                <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
                <a class="next" onclick="changeSlide(1)">&#10095;</a>
                @endif
        </div>
    </div>
    </div>

    <!-- Add the following CSS for styling -->
    <style>
        .lightbox-gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .gallery img {
            cursor: pointer;
            max-width: 150px;
            border: 2px solid #ddd;
            border-radius: 4px;
            transition: 0.3s;
        }
        .gallery img:hover {
            border-color: #666;
        }
        .lightbox {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            z-index: 1000;
            align-items: center;
            justify-content: center;
        }
        .lightbox-content {
            position: relative;
        }
        .lightbox .slide {
            display: none;
            text-align: center;
        }
        .lightbox .slide img {
            max-width: 90%;
            max-height: 80vh;
        }
        .lightbox .close {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 30px;
            color: white;
            cursor: pointer;
        }
        .lightbox .prev, .lightbox .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: white;
            font-size: 40px;
            user-select: none;
            padding: 0 15px;
        }
        .lightbox .prev {
            left: 0;
        }
        .lightbox .next {
            right: 0;
        }
    </style>

    <!-- Add the following JavaScript for functionality -->
    <script>
        let currentSlideIndex = 1;

        function openLightbox() {
            document.getElementById('lightbox').style.display = 'flex';
        }

        function closeLightbox() {
            document.getElementById('lightbox').style.display = 'none';
        }

        function showSlide(index) {
            const slides = document.querySelectorAll('.lightbox .slide');
            if (index > slides.length) currentSlideIndex = 1;
            if (index < 1) currentSlideIndex = slides.length;
            slides.forEach(slide => (slide.style.display = 'none'));
            slides[currentSlideIndex - 1].style.display = 'block';
        }

        function changeSlide(step) {
            showSlide((currentSlideIndex += step));
        }
    </script>
