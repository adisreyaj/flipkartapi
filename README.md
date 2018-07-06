# flipkartoffers
Use Flipkart Api to get the Latest Deal of the Day( DOTD) offers going on.Flipkart API is very powerful and we can use it to get the details of products and offers available on the platform.

We are going to see how to use the Flipkart API to get the DOTD offers that are live on the Flipkart Site using a php webpage. We will be using cURL to call the endpoints and later parse the received response in a beautiful card layout using Bootstrap.

<h2>Get Started</h2>
For using the Flipkart API, you will have to signup for an Affiliate account. Visit <a  target="_blank" href="https://affiliate.flipkart.com">Flipkart Affiliate</a> to Sign up for a free account.
Once you have signed up for the affiliate account, its time to get the API key.

<h2>How to Use the API</h2>
Flipkart has a DOTD Offers endpoint. When this endpoint is called it will send the details of all the Deals of the Day offers in JSON format.
To get the response it is necessary to add our <b>Flipkart Affiliate ID</b> and <b>Flipkart Affiliate Token</b>.
Check the flipkartdotdapi.php file for how the call is being made.
The Endpoint URL for getting the DOTD offers is :
https://affiliate-api.flipkart.net/affiliate/offers/v1/dotd/json. 

We have to then two piece of information that has to be added to the headers to get the response. If these parameters are not sent with the api call, it will return an error.

We are using cURL to call the api and add the required parameters as headers.
<h2>Flipkart API Call Code</h2>
<h4>flipkartdotdapi.php</h4>:
This php file shows how the api call is made to get the latest offers from Flipkart using the Flipkart API.

<h2>Example - Flipkart API Offers Listing </h2>

Visit <a href="https://sreyaj.com/flipkartapi/" target="_blank" rel="dofollow">Flipkart API-Offers Demo Page</a> to see the Flipkart API in action.
The webpage is written in php + html. For styling the products into a beautiful card format, we have used Bootstrap 4.0.
php + cURL is used to call the Flipkart API - DOTD offer page. We requested the response in JSON format. Flipkart API supports JSON and XML.
We created a cool card template for the images, title, description and a button element which will link to the product page.
The API is called and the response is broken down and stored in arrays. We need to get the title, description, the image link and the affiliate link to the product/offer landing page. 4 arrays are created and all the JSON array data is stored into their corresponding php arrays.

Later these arrays are iterated to create cards for each offer listing. The cards are dynamically created according to the number of offers listed in the API response (We haven't created a defualt card number).


<h2> Recommended Tools </h2>
For making the calls and gettings the result, no tools are necessary. We can write the code in php and execute it in the server. But if you want to experiment with APIs, the best tool to have is <a href="https://www.getpostman.com/" target="_blank">POSTMAN</a>.
Use PostMan to make calls and receive the response very easily. Its very easy to add headers and cookies with the API call. Plus it will provide you with the code in different languages so that you don't have to write the code on your own.
