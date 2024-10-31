=== ServicePress: Automate Inventory ===
Contributors: harmediastudios
Requires at least: 6.0
Tested up to: 6.4
Requires PHP: 7.0
Stable tag: 1.3
ServiceNow City: Washington
ServiceNow ServicePress Version: 2.0.0
Text Domain: servicepress
Donate link: https://paypal.me/harmediastudios
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Short Description
ServicePress: Automate Inventory

== Link to ServiceNow Application ==
	- https://servicepress.app/product/servicenow-store-app/ (Redirect to ServiceNow Store)

== Description ==
	Integration: Website and Content Management for WordPress.

	Universities: Network Sites (Students, Faculty, Departments. Libraries, Blogs, Courses)

	Our goal is to reduce the manual labor spent managing WordPress sites and the inventory between them. ServicePress will allow you to create a single site, as well as set up hundreds or thousands of sites that you maintain. With a Time to Value (TTV) of less than 1 hour, we have automated the entire process.

	ServicePress will help drive the automation, while you can drive your inventory and business.

	All subsequent extentions/integrations will be a new ServiceNow application. WooCommerce, LearnPress, etc.

== Installations ==
	ServiceNow
		1. Download "ServicePress: Core WordPress Integration" from the Store.
		2. Install application "ServicePress"
		3. See Installation Guide on Product page

	WordPress
		1. Download/Install Plugin "ServicePress: Automate Inventory" plugin
		2. Activate ServicePress plugin.
		3. All steps for WordPress are Complete
		Since this version only provides data to ServiceNow, it is just registering the REST API Route and Data.

== Credits ==
	This plugin is created by <a href="https://www.harmediastudios.com/" rel="friend" title="Harmedia Studios LLC">, a ServiceNow Partner.

== Branding Guideline ==
	ServicePress is a Harmedia Studios brand. When writing about ServicePress, please use the following format.

	* ServicePress (correct)
	* SP (correct only logo)
	* servicepress (incorrect; only for textdomain)
	* Service Press (incorrect)
	* spnow (incorrect; only for API endpoint)
	* Servicepress (incorrect)

== What's Next ==
	- For this plugin, we are starting out from the ServiceNow side of the integration. 
	- Settings page will be added for configuration
	- We will soon add to this plugin to provide push functionality from WordPress. 
	- Check back in the next version. 

== Frequently Asked Questions ==
None right now

== Upgrade Notice ==
None right now

== Legal Disclosure ==
	ServicePress uses the WordPress API and ServiceNow API to manage the process. The ServicePress Application provides the “vehicle” for the data to transport in.

	Each WordPress/WooCommerce Site Owner is responsible for the data that is sent to ServiceNow as as well the data from ServiceNow sent to WordPress/WooCommerce. ServicePress does not own the data, does not see the data. The ServicePress plugin is to support the functionality of the ServiceNow application.
	
	Security:
		HTTPS: The data is passed over WordPress HTTPS (if setup) and always over ServiceNow HTTPS
		All Credentials in transit: An encrypted Username and Password transmitted.
		All Credentials at rest: Encrypted with ServiceNow's Password2 Encryption.

	OOB Data: 
		WordPress: 
			- Core Site Information
			- User Information
			- Themes and Plugins
			- Post Categories
			- Posts/Pages and custom Post Types
			- Post Type Comments

		ServicePress: 
			The ServicePress Plugin provides the following additional data:
			- User’s Email address: 
				- ServiceNow Account creation
				- Notifications from ServiceNow
				- User lookup via APIs
			- User’s Role: Provide additional access to the user’s based on the role in each site.
			- Site Version: Update ServiceNow with the current sites’ version number and the Upgradeable version number.
			- Network Sites (WordPress MultiSite)
				- Request Sites/Blogs: Admin controlled Sites
				- Site switching: Depending on the current site we are requesting, we can switch to a different site for the correct response at runtime.

== Terms of Service == (ServiceNow)
	- ServiceNow Store Terms Of Use: https://tpp.servicenow.com/appStoreAttachments.do?sys_id=8d32f61ddbfba01020e6320b7c961909
	- Vendor App Subscription Terms and Conditions: https://tpp.servicenow.com/appStoreAttachments.do?sys_id=aba205aba710201078766c94d1790102

== Screenshots ==
1. [https://store.servicenow.com/488f2f391bdda51070350d43604bcbbc.iix  Dashboard for ServicePress]

== Changelog ==
[Changelog &raquo;]
(https://www.servicepress.app/changelog)

= 1.3 =
* Updated - Fixed Response for Non Network Sites and Fixed README from Old version

= 1.1.2 =
* Updated - Fixed extra closing PHP on email

= 1.1.1 =
* Updated - Fixed Email Address

= 1.1 =
* Updated - Parameters for Network Blogs updated to allow options with additional options from 1.0.2
* New - Added the ability to pull Multiple Networks and not just one.
* New - Added Authentication to the new REST endpoints.
* New - Added additional Network Information from a separate endpoint.

= 1.0.2 =
* Updated - Parameters for Network Blogs updated to allow options.

= 1.0.1 =
* Updated - Performance fix.

= 1.0.0 =
* New - Initial Build of the plugin. Allows access to the User's Email Address, User's Role, Network Sites, and update version for ServiceNow to know if Core is out of date.
