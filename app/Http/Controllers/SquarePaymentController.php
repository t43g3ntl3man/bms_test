<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Square\SquareClient;
use Square\Environment;
use Square\Exceptions\ApiException;


class SquarePaymentController extends Controller
{

    public function handlePayment(Request $request)
    {
        $client = new SquareClient([
            'accessToken' => 'EAAAEMqsr8MRxHrjt_3VVVrMf8ugqUomuz3TCYFFBedPreR2U4AjBRmVzNxR7Hdy',
            'environment' => 'sandbox', // or 'production'
        ]);

        try {

            $apiResponse = $client->getLocationsApi()->listLocations();
        
            if ($apiResponse->isSuccess()) {
                $result = $apiResponse->getResult();
                $amount_money = new \Square\Models\Money();
                $amount_money->setAmount(1000);
                $amount_money->setCurrency('GBP');

                $app_fee_money = new \Square\Models\Money();
                $app_fee_money->setAmount(10);
                $app_fee_money->setCurrency('GBP');

                $body = new \Square\Models\CreatePaymentRequest(
                    'ccof:customer-card-id-ok',
                    'cd65452d-1cfd-4fc5-8ef5-asda7f816b778cb',
                    $amount_money
                );
                // $body->setAppFeeMoney($app_fee_money);
                // $body->setAutocomplete(true);
                // $body->setCustomerId('W92WH6P11H4Z77CTET0RNTGFW8');
                // $body->setLocationId('L88917AVBK2S5');
                // $body->setReferenceId('123456');
                // $body->setNote('Brief description');

                $api_response = $client->getPaymentsApi()->createPayment($body);
                dd($api_response);
                if ($api_response->isSuccess()) {
                    $result = $api_response->getResult();
                } else {
                    $errors = $api_response->getErrors();
                }
                dd($result);
                # Your business logic here
        
            } else {
                $errors = $apiResponse->getErrors();
                # Your error-handling code here
            }
        
        } catch (ApiException $e) {
            dd($e);
            echo "ApiException occurred: <b/>";
            echo $e->getMessage() . "<p/>";
        }

        // dd($client->getHttpClient());

        // $nonce = $request->input('nonce');
        // $amount = $request->input('amount');
        // $locationId = 'YOUR_LOCATION_ID';

        // $money = new Money();
        // $money->setAmount($amount);
        // $money->setCurrency('USD');

        // $body = new CreatePaymentRequest(
        //     $nonce,
        //     uniqid(),
        //     $money
        // );

        // $apiInstance = new PaymentsApi($client);
        // $response = $apiInstance->createPayment($body);

        // return response()->json($response, 200);
    }
}
