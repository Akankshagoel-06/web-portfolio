$fields = array(
    "name" => "Name",
    "email" => "Email",
    "subject" => "Subject",
    "phone" => "Phone",
    "message" => "Message",
    "url" => "URL"
  );
  // Change here.
  $to = "akanksha060202@gmail.com";
  $message = array();
  foreach ($_POST as $key => $value) {
    $message[] = $fields[$key] . ": " . $value;
  }
  if (mail($to, "Message from {$_POST["url"]}", implode(PHP_EOL, $message)))
    echo json_encode(
      array(
        "status" => "success",
        "message" => "Thank you, a member of our team will be in touch shortly.",
        "origmsg" => implode(PHP_EOL, $message),
        "recaptchaDetail" => array(
          "success" => true
        )
      )
    );
  else
    echo json_encode(
      array(
        "status" => "fail",
        "message" => "Sorry, something wrong happened!",
        "recaptchaDetail" => array(
          "success" => false
        )
      )
    );
?>```

```  $fields = array(
    "name" => "Name",
    "email" => "Email",
    "subject" => "Subject",
    "phone" => "Phone",
    "message" => "Message",
    "url" => "URL"
  );```
