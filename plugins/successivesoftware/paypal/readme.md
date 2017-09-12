#Paypal Plugin

Description

Paypal plugin allows you to easily create PayPal Buy Now & Donation type buttons. It generates dynamic buttons using component that enable PayPal checkout on your CMS page.

Your customers will be able to pay for your products using PayPal or Credit Card.
PayPal Plugin supports PayPal Sandbox. PayPal Sandbox is a simulation environment which allows you to do test purchases between a test buyer and a seller account. This is to make sure that your store can process PayPal transactions without any issues. It also helps you get prepared before selling to real customers.

Features
+ Fast install and flexible setup
+ Create PayPal buttons on the fly in a CMS page using component
+ Accept donations from users
+ View or Manage orders received via PayPal buttons from your backend dashboard
+ Quick settings configurations
+ Create button in any currency supported by PayPal


Documentation & Usage - Backend

Once you have installed this plugin you need to go to the settings menu to configure some default options (Settings / Paypal / Paypal Settings)
+ Settings
	+ Business Paypal Email: Your Paypal Email Address
	+ Curency Code: The dafault currency code
	+ Enable test mode: Enable paypal sandbox mode for testing
	+ Return Page: Your return page name

  In order to create a button insert component(paypal payment) to CMS page and change the component settings according to you.

  Button Parameters:
   You can use additional parameters to customize your paypal buttons.
   + Product Name: Description of the item
   + Amount: The price of the item (e.g. amount="4.95").
   + Type: The type of button to render (e.g. "buynow" or "donate")

Return/Success Page

   Create another CMS page with name as you provided in the paypal settings section field "Return Page" and add the "paypal order" component to it and also you can modify the content of the page according to your design or requirement(in the markup section of page).

	Markup Section
	e.g.
	-------
	<div class="container">
		Thank you for payment.
	</div>
	--------

