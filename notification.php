 <?php
require __DIR__ .  '/vendor/autoload.php';
MercadoPago\SDK::setAccessToken("APP_USR-1159009372558727-072921-8d0b9980c7494985a5abd19fbe921a3d-617633181");

switch($_POST["type"]) {
    case "payment":
        $payment = MercadoPago\Payment::find_by_id($_POST["data"]["id"]);
        $json = file_get_contents("php://input");
        echo json_response("200", "OK");
        file_put_contents("pago.json", $json);
        break;
    case "plan":
        $plan = MercadoPago\Plan::find_by_id($_POST["data"]["id"]);
        $json = file_get_contents("php://input");
        echo json_response("200", "OK");
        file_put_contents("./$plan.json", $json);
        break;
    case "subscription":
        $subscription = MercadoPago\Subscription::find_by_id($_POST["data"]["id"]);
        $json = file_get_contents("php://input");
        echo json_response("200", "OK");
        file_put_contents("./$subscription.json", $json);
        break;
    case "invoice":
        $invoice = MercadoPago\Invoice::find_by_id($_POST["data"]["id"]);
        $json = file_get_contents("php://input");
        echo json_response("200", "OK");
        file_put_contents("./$invoice.json", $json);
        break;
    default:
        $json = file_get_contents("php://input");
        echo json_response("200", "OK");
        file_put_contents("./respuesta.json", $json);
        break;
        
}

$json = file_get_contents("php://input");
file_put_contents("respuesta.json", $json);




function json_response($code = 200, $message = null)
{
    // clear the old headers
    header_remove();
    // set the actual code
    http_response_code($code);
    // set the header to make sure cache is forced
    header("Cache-Control: no-transform,public,max-age=300,s-maxage=900");
    // treat this as json
    header('Content-Type: application/json');
    $status = array(
        200 => '200 OK',
        400 => '400 Bad Request',
        422 => 'Unprocessable Entity',
        500 => '500 Internal Server Error'
        );
    // ok, validation error, or failure
    header('Status: '.$status[$code]);
    // return the encoded json
    return json_encode(array(
        'status' => $code < 300, // success or not?
        'message' => $message
        ));
}



?>