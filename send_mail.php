<?php
// multiple recipients
if( isset( $_POST['file_path'] ) ) {
    $to  = 'suren@codingmart.com';

// subject
    $subject = 'Dummy form content';
         if($_POST['category'] == "Bed")
      {

        $variant ='<tr> <td>Size</td><td>'.$_POST['size'].'</td></tr>';

       }
       elseif($_POST['category'] == "ETU"){

        $variant = '<td>Model Size</td><td>'.$_POST['modelsize'].'</td>';

       }
       else
       {

        $variant = "";

       }
// message
    $message = '
    <html>
    <head>
      <title>Claim Form</title>
  </head>
  <body>
      <p>Below are the claim details</p>
      <table>
        <tr>
            <td>PONumber</td><td>'.$_POST['ponumber'].'</td>
        </tr>
        <tr>

            <td>Category</td><td>'.$_POST['category'].'</td>
        </tr>'.$variant.'
        
        <tr>
            <td>Product Name</td><td>'.$_POST['productName'].'</td>
        </tr>
        <tr>
            <td>Product Code</td><td>'.$_POST['productCode'].'</td>
        </tr>
        <tr>
            <td>Color</td><td>'.$_POST['color'].'</td>
        </tr>
        <tr>
            <td>Quantity</td><td>'.$_POST['quantity'].'</td>
        </tr>
    </table>
</body>
</html>
'."<a href='http://www.codingmart.com/JqueryUploader/server/php/files/".$_POST['file_path']."/'>Click here to see images</a>" ;

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: Krishna <krishnaprabhu.a@gmail.com>' . "\r\n";
$headers .= 'From: noreply <noreply@example.com>' . "\r\n";
$headers .= 'Cc: noreply@example.com' . "\r\n";
$headers .= 'Bcc: noreply@example.com' . "\r\n";

if(mail($to, $subject, $message, $headers)){
    echo "Mail Sent<br />";
    echo "<a href='server/php/files/".$_POST['file_path']."/'>Click here to see images</a>" ;

}
else{
    echo "Mail sending failed";
}
}
?>