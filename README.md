# WebHooks-Synology-Chat
Simple webhooks for synology chat, who can send messages automaticly.

## Send message automaticly 
You can shedule task in Windows shedule task programmer, and execute a local php executable like "C:\Xampp\php\php.exe" with "-f  C:\xampp\htdocs\www\SynologyBot\synologyBot.php" parameter.
Then, your message will be send in the channel where the webhooks is published.

## channel that will receive
To configure the Channel that will receive the message, go to Synology Chat -> click on your profile on top right -> integration -> Incoming Webhooks -> + Create -> "Post to Channel" field.


## Token webhook
To get the token's webhooks, go to Synology Chat -> click on your profile on top right -> integration -> Incoming Webhooks -> + Create -> "Webhook URL" field.
