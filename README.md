# Booked_GoogleLogin

Small change to how the google login works for
https://github.com/effgarces/BookedScheduler

Instead of going into twinkle toes server changed to you can add your own Google APP

# Configuration
Configuration is pretty straight forward after copying files into you booked instalation, go into the config file and add your google app credentials
If you don't have your own you can crete one here: https://console.cloud.google.com/apis/credentials

You are going to need to add your Client ID, secret and your redirect URI in the config file. THE REDIRECT PATH NEEDS TO BE ABSOLUTE POINTING TO "googleAuth.php" IN YOUR WEB FOLDER.

Do not forget to add your redirect uri to the google app as well when creating it, so it knows where to go.
Example image

![image](https://user-images.githubusercontent.com/33222172/118257698-d7060980-b4a6-11eb-8842-874fea7fd33e.png)
