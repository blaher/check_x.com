<?php
$email_address = "user@domain.com";

echo "Starting script...\n";

echo "Checking x.com";
while (file_get_contents("http://x.com") === "x") {
  echo ".";

  sleep(60);
}
echo "\nx.com has changed!\n";

echo "Alerting user...\n";
mail($email_address, "x.com has changed!", "Please check the website now.");

echo "Killing script...\n";
exit();
