### What is PHP DialogFuel.
PHP DialogFuel is a Small API Service For Connect ChatFuel (Chatbot) to Dialogflow(AI).This Service is Middle man for get user input form ChatFuel Chatbot and send to Natural-language process in Dialogflow then Return to User Answer. For Developer who want to make Smarter and Human like Chatbot.
- Support PHP Version 5.0+
- Host only on SSL Hosting (with https://)
- this include [**unirest-php**](https://github.com/Kong/unirest-php "**unirest-php**") for Request Service 
- This is All Free for Every One.

### How to Setup
1. Pull requests. or Download PHP-Dialogfuel as Zip
2. Open file **Config.php** then Change **ClientToken** and **DevToken** with Your Key (Get it in Dialogflow Setting page)

```php
        <?php
    	$qversion = "20150910"; 
    	$lang = "en";
    	$ClientToken = "Client access token Here"; //Change this
    	$DevToken = "Developer access token Here"; // Change this
        ?>
```
	
3. Upload All File in Folder **PHP_DialogFuel** to Your SLL Hosting.
4. Testing Connection to Dialogflow by Enter https://yoursite.com/filepath/DialogFuel.php?txttodialogflow=Hello it's Ok,If show Greeting form Default Welcome Intent. like this. `    {"messages":[{"text":"Hello!"}]}`

### Connect to ChatFuel Bot
1. Go to Your bot and Select **Default Answer** Block

2. Click **Chatfuel Plugins** and Add **User Input** Plugins

3. In **User Input** Card, Find **SAVE ANSWER TO ATTRIBUTE** then type **{{txttodialogflow}}** (make sure you type {{txttodialogflow}} becuase Service fixed only this Name )

4.  Click **Chatfuel Plugins** and Add **JSON API** Plugins.

5. In JSON API Card, Select Type to **GET** and **URL** to Your DialogFuel.php File. (Ex. https://yoursite.com/filepath/DialogFuel.php) and the last thing **USER ATTRIBUTES** set to **{{txttodialogflow}}**

6. Let's Test !

[![](https://opdev.men/wp-content/uploads/2018/03/php-dialogfuel-chatfuel-connect.jpg)](https://opdev.men/wp-content/uploads/2018/03/php-dialogfuel-chatfuel-connect.jpg)

### Other
- [unirest-php](https://github.com/Kong/unirest-php "unirest-php")
- [Chatfuel](https://chatfuel.com "Chatfuel")
- [Dialogflow](https://dialogflow.com/ "Dialogflow")
- [OPDEV.MEN ](https://opdev.men "OPDEV.MEN ") (My site's)
