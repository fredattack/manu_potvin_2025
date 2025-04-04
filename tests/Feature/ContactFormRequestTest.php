<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\Validator;

class ContactFormRequestTest extends TestCase
{
    public function testContactFormValidationRules()
    {
        $form = new ContactFormRequest();

        $rules = $form->rules();

        $this->assertArrayHasKey( 'name', $rules );
        $this->assertArrayHasKey( 'phone', $rules );
        $this->assertArrayHasKey( 'email', $rules );
        $this->assertArrayHasKey( 'message', $rules );
    }

    /**
     * @dataProvider contactFormDataProvider
     */
    public function testContactFormValidation($formData, $expectedValid)
    {
        $formRequest = new ContactFormRequest();
        $validator = Validator::make( $formData, $formRequest->rules() );

        $this->assertEquals( $expectedValid, $validator->passes() );
    }

    public static function contactFormDataProvider()
    {
        return [
            [['name' => '', 'phone' => '', 'email' => '', 'message' => ''], false],
            [['name' => 'John', 'phone' => '1234567890', 'email' => 'john@example.com', 'message' => 'Hello!'], true],
            [['name' => 'Jane', 'phone' => '', 'email' => 'jane@example.com', 'message' => ''], false],
        ];
    }
}
