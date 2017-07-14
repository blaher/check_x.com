<?php
$email_address = "user@domain.com";

$website_check = 'x';

echo "Starting script...\n";

echo "Checking x.com";
$website_content = file_get_contents("http://x.com");
while ($website_content === $website_check) {
  echo ".";

  sleep(60);
}
echo "\nx.com has changed!\n";

echo "Alerting user...\n";
$email_message = "Please check the website now. It currently is:\n".$website_content;
mail($email_address, "x.com has changed!", $email_message);

echo "Killing script...\n";
exit();
