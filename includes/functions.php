<?php

namespace SEXTOHafez;

/**
 * Class _Public
 * @package SEXTOHafez
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // No direct access allow ;)


class efbFunction {

	protected $db;
	
	public function __construct() {  
		global $wpdb;
		$this->db = $wpdb; 
		
    }

	function test_call_efb(){
		//error_log('test functions Coll Done!');

		
	}

	public function text_efb($inp){
		$lang = [
			 "create" => __('Create','SEXTOHafez'),
			"define" => __('Define','SEXTOHafez'),
			"formName" => __('Form Name','SEXTOHafez'),
			"createDate" => __('Create Date','SEXTOHafez'),
			"edit" => __('Edit','SEXTOHafez'),
			"content" => __('Content','SEXTOHafez'),
			"trackNo" => __('Confirmation Code','SEXTOHafez'),
			"formDate" => __('Form Date','SEXTOHafez'),
			"by" => __('By','SEXTOHafez'),
			"ip" => __('IP','SEXTOHafez'),
			"guest" => __('Guest','SEXTOHafez'),			
			"response" => __('Response','SEXTOHafez'),
			"date" => __('Date Picker','SEXTOHafez'),
			"videoDownloadLink" => __('Video Download','SEXTOHafez'),
			"downloadViedo" => __('Download Video','SEXTOHafez'),
			"download" => __('Download','SEXTOHafez'),
			"youCantUseHTMLTagOrBlank" => __('You can not use HTML Tag or send blank messages.','SEXTOHafez'),
			"reply" => __('Reply','SEXTOHafez'),
			"messages" => __('Messages','SEXTOHafez'),
			"pleaseWaiting" => __('Please Waiting','SEXTOHafez'),
			"loading" => __('Loading','SEXTOHafez'),
			"remove" => __('Remove!','SEXTOHafez'),
			"areYouSureYouWantDeleteItem" => __('Are you sure you want to delete this item?','SEXTOHafez'),
			"no" => __('NO','SEXTOHafez'),
			"yes" => __('Yes','SEXTOHafez'),
			"numberOfSteps" => __('Number of steps','SEXTOHafez'),
			"titleOfStep" => __('Title of step','SEXTOHafez'),
			"proVersion" => __('Pro Version','SEXTOHafez'),
			"getProVersion" => __('Get Pro version','SEXTOHafez'),					
			"reCAPTCHA" => __('reCAPTCHA','SEXTOHafez'),
			"protectsYourWebsiteFromFraud" => __('Click here to watch a video tutorial.','SEXTOHafez'),
			"enterSITEKEY" => __('SECRET KEY','SEXTOHafez'),
			"alertEmail" => __('Alert Email','SEXTOHafez'),
			"enterAdminEmail" => __('If you do not want to show Confirmation Code to the user, do not mark the option below.','SEXTOHafez'),
			"showTrackingCode" => __('Show Confirmation Code','SEXTOHafez'),
			"trackingCodeFinder" => __('Confirmation Code Finder','SEXTOHafez'),
			"copyAndPasteBelowShortCodeTrackingCodeFinder" => __('Copy and Paste below short-code of Confirmation Code finder in any page or post.','SEXTOHafez'),
			"save" => __('Save','SEXTOHafez'),
			"waiting" => __('Waiting','SEXTOHafez'),
			"saved" => __('Saved','SEXTOHafez'),
			"stepName" => __('Step Name','SEXTOHafez'),
			"IconOfStep" => __('Icon of step','SEXTOHafez'),
			"stepTitles" => __('Step Titles','SEXTOHafez'),
			"elements" => __('Elements:','SEXTOHafez'),
			"delete" => __('Delete','SEXTOHafez'),
			"newOption" => __('New option','SEXTOHafez'),
			"media" => __('(Video or Audio)','SEXTOHafez'),
			"required" => __('Required','SEXTOHafez'),
			"button" => __('Text','SEXTOHafez'),
			"password" => __('Password','SEXTOHafez'),
			"email" => __('Email','SEXTOHafez'),
			"number" => __('Number','SEXTOHafez'),
			"file" => __('File Upload','SEXTOHafez'),
			"tel" => __('Tel','SEXTOHafez'),
			"textarea" => __('Long Text','SEXTOHafez'),
			"checkbox" => __('Check Box','SEXTOHafez'),
			"radiobutton" => __('Radio Button','SEXTOHafez'),
			"radio" => __('Radio','SEXTOHafez'),
			"url" => __('URL','SEXTOHafez'),
			"range" => __('Range','SEXTOHafez'),
			"color" => __('Color Picker','SEXTOHafez'),
			"fileType" => __('File Type','SEXTOHafez'),
			"label" => __('Label','SEXTOHafez'),
			"class" => __('Class','SEXTOHafez'),
			"id" => __('ID','SEXTOHafez'),
			"tooltip" => __('Tooltip','SEXTOHafez'),
			"formUpdated" => __('The Form Updated','SEXTOHafez'),
			"goodJob" => __('Good Job','SEXTOHafez'),
			"formUpdatedDone" => __('The form has been successfully updated','SEXTOHafez'),
			"formIsBuild" => __('The form is successfully built','SEXTOHafez'),
			"formCode" => __('Form Code','SEXTOHafez'),
			"close" => __('Close','SEXTOHafez'),
			"done" => __('Done','SEXTOHafez'),
			"demo" => __('Demo','SEXTOHafez'),			
			"pleaseFillInRequiredFields" => __('Please fill in all required fields.','SEXTOHafez'),
			"availableInProversion" => __('This option is available in Pro version','SEXTOHafez'),
			"formNotBuilded" => __('The form has not been builded!','SEXTOHafez'),
			"someStepsNotDefinedCheck" => __('Some steps not defined, Please check:','SEXTOHafez'),
			"ifYouNeedCreateMoreThan2Steps" => __('If you need create more than 2 Steps, activate ','SEXTOHafez'),
			"youCouldCreateMinOneAndMaxtwo" => __('You can create minimum 1 and maximum 2 Steps.','SEXTOHafez'),
			"youCouldCreateMinOneAndMaxtwenty" => __('You Could create minimum 1 Step and maximum 20 Step','SEXTOHafez'),
			"preview" => __('Preview','SEXTOHafez'),
			"somethingWentWrongPleaseRefresh" => __('Something went wrong, Please refresh and try again','SEXTOHafez'),
			"formNotCreated" => __('The form has not been created!','SEXTOHafez'),
			"atFirstCreateForm" => __('At first create a form and add elements then try again','SEXTOHafez'),
			"allowMultiselect" => __('Allow multi-select','SEXTOHafez'),
			"DragAndDropUI" => __('Drag and drop UI','SEXTOHafez'),
			"clickHereForActiveProVesrsion" => __('Click here for Active Pro version','SEXTOHafez'),
			"selectOpetionDisabled" => __('Select anoption (Disabled in test view)','SEXTOHafez'),
			"pleaseEnterTheTracking" => __('Please enter the Confirmation Code','SEXTOHafez'),									
			"formNotFound" => __('Form is not found','SEXTOHafez'),
			"errorV01" => __('Error Code:V01','SEXTOHafez'),
			"password8Chars" => __('Password must be at least 8 characters','SEXTOHafez'),
			"registered" => __('Registered','SEXTOHafez'),
			"yourInformationRegistered" => __('Your information is successfully registered','SEXTOHafez'),
			"youNotPermissionUploadFile" => __('You do not have permission to upload this file:','SEXTOHafez'),
			"pleaseUploadA" => __('Please upload the','SEXTOHafez'),
			"please" => __('Please','SEXTOHafez'),
			"trackingForm" => __('Tracking Form','SEXTOHafez'),
			"trackingCodeIsNotValid" => __('Confirmation Code is not valid.','SEXTOHafez'),
			"checkedBoxIANotRobot" => __('Please Checked Box of I am Not robot','SEXTOHafez'),
			"howConfigureEFB" => __('How to configure Easy Form Builder','SEXTOHafez'),
			"howGetGooglereCAPTCHA" => __('How to get Google reCAPTCHA and implement it into Easy Form Builder','SEXTOHafez'),
			"howActivateAlertEmail" => __('How to activate the alert email for new form submission','SEXTOHafez'),
			"howCreateAddForm" => __('How to create and add a form with Easy Form Builder','SEXTOHafez'),
			"howActivateTracking" => __('How to activate a Confirmation Code in Easy Form Builder','SEXTOHafez'),
			"howWorkWithPanels" => __('How to work with panels in Easy Form Builder','SEXTOHafez'),
			"points" => __('points','SEXTOHafez'),
			"howAddTrackingForm" => __('How to add The Confirmation Code Finder to a post, page, or custom post type','SEXTOHafez'),
			"howFindResponse" => __('How to find a response through a Confirmation Code','SEXTOHafez'),
			"pleaseEnterVaildValue" => __('Please enter a valid value','SEXTOHafez'),
			"step" => __('Step','SEXTOHafez'),
			"advancedCustomization" => __('Advanced customization','SEXTOHafez'),
			"orClickHere" => __(' or click here','SEXTOHafez'),
			"downloadCSVFile" => __(' Download CSV file','SEXTOHafez'),
			"downloadCSVFileSub" => __('Download CSV file of subscriptions','SEXTOHafez'),
			"login" => __('Login','SEXTOHafez'),
			"thisInputLocked" => __('this input is locked','SEXTOHafez'),
			"thisElemantAvailableRemoveable" => __('This element is available and removable.','SEXTOHafez'),
			"thisElemantWouldNotRemoveableLoginform" => __('This element would not removable in Login form.','SEXTOHafez'),
			"send" => __('Send','SEXTOHafez'),
			"contactUs" => __('Contact us','SEXTOHafez'),
			"support" => __('Support','SEXTOHafez'),
			"subscribe" => __('Subscribe','SEXTOHafez'),
			"logout" => __('Logout','SEXTOHafez'),
			"survey" => __('Survey','SEXTOHafez'),
			"chart" => __('Chart','SEXTOHafez'),
			"noComment" => __('No comment','SEXTOHafez'),
			"easyFormBuilder" => __('Easy Form Builder','SEXTOHafez'),
			"byWhiteStudioTeam" => __('By WhiteStudio.team','SEXTOHafez'),
			"createForms" => __('Create Forms','SEXTOHafez'),
			"tutorial" => __('Tutorial','SEXTOHafez'),
			"forms" => __('Forms','SEXTOHafez'),
			"tobeginSentence" => __('To begin, you should to be Create a from into Easy Form Builder Plugin. for create a form click below button.','SEXTOHafez'),
			"efbIsTheUserSentence" => __('Easy Form Builder is the user-friendly form creator that allows you to create professional multistep forms within minutes.','SEXTOHafez'),
			"efbYouDontNeedAnySentence" => __(' You do not need any coding skills to use Easy Form Builder. Simply drag and drop your layouts into order to easily create unlimited custom multistep forms. A unique Confirmation Code allows you to connect any submission to an individual request.','SEXTOHafez'),
			"newResponse" => __('New Response','SEXTOHafez'),
			"read" => __('Read','SEXTOHafez'),
			"copy" => __('Copy','SEXTOHafez'),
			"general" => __('General','SEXTOHafez'),
			"dadFieldHere" => __('Drag & Drop Fields Here','SEXTOHafez'),
			"help" => __('Help','SEXTOHafez'),
			"setting" => __('Setting','SEXTOHafez'),
			"maps" => __('Maps','SEXTOHafez'),
			"youCanFindTutorial" => __('You can find tutorial in beside box and if you need more tutorials click on "Document" button.','SEXTOHafez'),
			"proUnlockMsg" => __('You can get pro version and gain unlimited access to all plugin services.','SEXTOHafez'),
			"aPIKey" => __('API KEY','SEXTOHafez'),
			"youNeedAPIgMaps" => __('You need API key of Google Maps if you want to use Maps in forms.','SEXTOHafez'),
			"copiedClipboard" => __('Copied to Clipboard','SEXTOHafez'),
			"noResponse" => __('No Response','SEXTOHafez'),
			"offerGoogleCloud" => __('For using reCAPTCHA and location picker(Maps) sign up in Google cloud service, you will get <b>USD $350</b> worth of credits in Google Cloud only for our users,','SEXTOHafez'),
			"getOfferTextlink" => __(' Click here to get credits.','SEXTOHafez'),
			"clickHere" => __('Click here','SEXTOHafez'),
			"SpecialOffer" => __('Special offer','SEXTOHafez'),
			"googleKeys" => __('Google Keys','SEXTOHafez'),
			"emailServer" => __('Email server','SEXTOHafez'),
			"beforeUsingYourEmailServers" => __('Before using your Email servers, you need to verify the status of e-mail servers and make sure that they are all running.','SEXTOHafez'),
			"emailSetting" => __('Email Settings','SEXTOHafez'),
			"clickToCheckEmailServer" => __('Click To Check Email Server','SEXTOHafez'),
			"dadfile" => __('D&D File Upload','SEXTOHafez'),
			"field" => __('Field','SEXTOHafez'),
			"advanced" => __('Advanced','SEXTOHafez'),
			"switch" => __('Switch','SEXTOHafez'),
			"locationPicker" => __('Location Picker','SEXTOHafez'),
			"rating" => __('Rating','SEXTOHafez'),
			"esign" => __('Signature','SEXTOHafez'),
			"yesNo" => __('Yes/No','SEXTOHafez'),
			"htmlCode" => __('HTML Code','SEXTOHafez'),
			"pcPreview" => __('PC Preview','SEXTOHafez'),
			"youDoNotAddAnyInput" => __('You do not add any field','SEXTOHafez'),
			"copyShortcode" => __('Copy ShortCode','SEXTOHafez'),
			"shortcode" => __('ShortCode','SEXTOHafez'),
			"copyTrackingcode" => __('Copy Confirmation Code','SEXTOHafez'),
			"previewForm" => __('Preview Form','SEXTOHafez'),
			"activateProVersion" => __('Activate Pro Version','SEXTOHafez'),
			"itAppearedStepsEmpty" => __('It is appeared some steps are empty','SEXTOHafez'),
			"youUseProElements" => __('You are Using Pro version field. For saving this element in the form, activate Pro version.','SEXTOHafez'),
			"sampleDescription" => __('Sample description','SEXTOHafez'),
			"fieldAvailableInProversion" => __('This field available in Pro version','SEXTOHafez'),
			"editField" => __('Edit Field','SEXTOHafez'),
			"description" => __('Description','SEXTOHafez'),
			"thisEmailNotificationReceive" => __('Enable email notification','SEXTOHafez'),
			"activeTrackingCode" => __('Active Confirmation Code','SEXTOHafez'),
			"addGooglereCAPTCHAtoForm" => __('Add Google reCAPTCHA to the form ','SEXTOHafez'),
			"dontShowIconsStepsName" => __('Do not show Icons & Steps name','SEXTOHafez'),
			"dontShowProgressBar" => __('Do not show progress bar','SEXTOHafez'),
			"showTheFormTologgedUsers" => __('Private form','SEXTOHafez'),
			"labelSize" => __('Label size','SEXTOHafez'),
			"default" => __('Default','SEXTOHafez'),
			"small" => __('Small','SEXTOHafez'),
			"large" => __('Large','SEXTOHafez'),
			"xlarge" => __('XLarge','SEXTOHafez'),
			"xxlarge" => __('XXLarge','SEXTOHafez'),
			"xxxlarge" => __('XXXLarge','SEXTOHafez'),
			"labelPostion" => __('Label Position','SEXTOHafez'),
			"align" => __('Align','SEXTOHafez'),
			"left" => __('Left','SEXTOHafez'),
			"center" => __('Center','SEXTOHafez'),
			"right" => __('Right','SEXTOHafez'),
			"width" => __('Width','SEXTOHafez'),
			"cSSClasses" => __('CSS Classes','SEXTOHafez'),
			"defaultValue" => __('Default value','SEXTOHafez'),
			"placeholder" => __('Placeholder','SEXTOHafez'),
			"enterAdminEmailReceiveNoti" => __('Enter Admin Email to receive email notification','SEXTOHafez'),
			"corners" => __('Corners','SEXTOHafez'),
			"rounded" => __('Rounded','SEXTOHafez'),
			"square" => __('Square','SEXTOHafez'),
			"icon" => __('Icon','SEXTOHafez'),
			"buttonColor" => __('Button Color','SEXTOHafez'),
			"blue" => __('Blue','SEXTOHafez'),
			"darkBlue" => __('Dark Blue','SEXTOHafez'),
			"lightBlue" => __('Light Blue','SEXTOHafez'),
			"grayLight" => __('Gray Light','SEXTOHafez'),
			"grayLighter" => __('Gray Lighter','SEXTOHafez'),
			"green" => __('Green','SEXTOHafez'),
			"pink" => __('Pink','SEXTOHafez'),
			"yellow" => __('Yellow','SEXTOHafez'),
			"light" => __('Light','SEXTOHafez'),
			"Red" => __('red','SEXTOHafez'),
			"grayDark" => __('Gray Dark','SEXTOHafez'),
			"white" => __('White','SEXTOHafez'),
			"clr" => __('Color','SEXTOHafez'),
			"borderColor" => __('Border Color','SEXTOHafez'),
			"height" => __('Height','SEXTOHafez'),
			"name" => __('Name','SEXTOHafez'),
			"latitude" => __('Latitude','SEXTOHafez'),
			"longitude" => __('Longitude','SEXTOHafez'),
			"exDot" => __('e.g.','SEXTOHafez'),
			"pleaseDoNotAddJsCode" => __('(Please do not add Javascript or jQuery codes to html codes for security reasons)','SEXTOHafez'),
			"button1Value" => __('Button 1 value','SEXTOHafez'),
			"button2Value" => __('Button 2 value','SEXTOHafez'),
			"iconList" => __('Icons list','SEXTOHafez'),
			"previous" => __('Previous','SEXTOHafez'),
			"next" => __('Next','SEXTOHafez'),
			"noCodeAddedYet" => __('Code has not yet been added. Click on','SEXTOHafez'),
			"andAddingHtmlCode" => __(' and adding html code.','SEXTOHafez'),
			"proMoreStep" => __('When you activate pro version, so you can create unlimited form steps.','SEXTOHafez'),
			"aPIkeyGoogleMapsError" => __('API key of Google maps has not been added. Please add API key of google maps on Easy Form Builder > Panel > setting > Google Keys and try again.','SEXTOHafez'),
			"howToAddGoogleMap" => __('How to Add Google maps to Easy form Builder WordPress Plugin','SEXTOHafez'),
			"deletemarkers" => __('Delete markers','SEXTOHafez'),
			"updateUrbrowser" => __('update your browser','SEXTOHafez'),
			"stars" => __('Stars','SEXTOHafez'),
			"nothingSelected" => __('Nothing selected','SEXTOHafez'),
			"duplicate" => __('Duplicate','SEXTOHafez'),
			"availableProVersion" => __('Available in pro version','SEXTOHafez'),
			"mobilePreview" => __('Mobile Preview','SEXTOHafez'),
			"thanksFillingOutform" => __('Thanks for filling out our form.','SEXTOHafez'),
			"finish" => __('Finish','SEXTOHafez'),
			"dragAndDropA" => __('Drag & Drop the','SEXTOHafez'),
			"browseFile" => __('Browse File','SEXTOHafez'),
			"removeTheFile" => __('Remove the file','SEXTOHafez'),
			"enterAPIKey" => __('Enter API KEY','SEXTOHafez'),
			"formSetting" => __('Form Settings','SEXTOHafez'),
			"select" => __('Select','SEXTOHafez'),
			"up" => __('Up','SEXTOHafez'),
			"sending" => __('Sending','SEXTOHafez'),
			"enterYourMessage" => __('Please Enter your message','SEXTOHafez'),
			"add" => __('Add','SEXTOHafez'),
			"code" => __('Code','SEXTOHafez'),
			"star" => __('Star','SEXTOHafez'),
			"form" => __('Form','SEXTOHafez'),
			"black" => __('Black','SEXTOHafez'),
			"pleaseReporProblem" => __('Please report the following problem to Easy Form builder team','SEXTOHafez'),
			"reportProblem" => __('Report problem','SEXTOHafez'),
			"ddate" => __('Date','SEXTOHafez'),
			"serverEmailAble" => __('Your e-mail server able to send Emails','SEXTOHafez'),
			"sMTPNotWork" => __('your host can not send emails because Easy form Builder can not connect to the Email server. contact to your Host support','SEXTOHafez'),
			"aPIkeyGoogleMapsFeild" => __('Google Maps Loading Errors.','SEXTOHafez'),
			"fileIsNotRight" => __('The file is not the right file type','SEXTOHafez'),
			"thisElemantNotAvailable" => __('The Field is not available in this type forms','SEXTOHafez'),
			"numberSteps" => __('Edit','SEXTOHafez'),
			"clickHereGetActivateCode" => __('Click here to get Activate Code.','SEXTOHafez'),			
			"trackingCode" => __('Confirmation Code','SEXTOHafez'),
			"text" => __('Text','SEXTOHafez'),
			"multiselect" => __('Multiple Select','SEXTOHafez'),
			"newForm" => __('New Form','SEXTOHafez'),
			"registerForm" => __('Register Form','SEXTOHafez'),
			"loginForm" => __('Login Form','SEXTOHafez'),
			"subscriptionForm" => __('Subscription Form','SEXTOHafez'),
			"supportForm" => __('Support Form','SEXTOHafez'),
			"createBlankMultistepsForm" => __('Create a blank multisteps form.','SEXTOHafez'),
			"createContactusForm" => __('Create a Contact us form.','SEXTOHafez'),
			"createRegistrationForm" => __('Create a user registration(Sign-up) form.','SEXTOHafez'),
			"createLoginForm" => __('Create a user login (Sign-in) form.','SEXTOHafez'),
			"createnewsletterForm" => __('Create a newsletter form','SEXTOHafez'),
			"createSupportForm" => __('Create a support contact form.','SEXTOHafez'),
			"availableSoon" => __('Available Soon','SEXTOHafez'),
			"reservation" => __('Reservation ','SEXTOHafez'),
			"createsurveyForm" => __('Create survey or poll or questionnaire forms ','SEXTOHafez'),
			"createReservationyForm" => __('Create reservation or booking forms ','SEXTOHafez'),
			"firstName" => __('First name','SEXTOHafez'),
			"lastName" => __('Last name','SEXTOHafez'),
			"message" => __('Message','SEXTOHafez'),
			"subject" => __('Subject','SEXTOHafez'),
			"phone" => __('Phone','SEXTOHafez'),
			"register" => __('Register','SEXTOHafez'),
			"username" => __('Username','SEXTOHafez'),
			"allStep" => __('all step','SEXTOHafez'),
			"beside" => __('Beside','SEXTOHafez'),
			"invalidEmail" => __('Invalid Email address','SEXTOHafez'),
			"clearUnnecessaryFiles" => __('Clear unnecessary files','SEXTOHafez'),
			"youCanRemoveUnnecessaryFileUploaded" => __('You can Remove unnecessary file uploaded by user with below button','SEXTOHafez'),			
			"whenEasyFormBuilderRecivesNewMessage" => __('When Easy Form Builder receives a new message, It will send an  alert email to admin of plugin.','SEXTOHafez'),
			"reCAPTCHAv2" => __('reCAPTCHA v2','SEXTOHafez'),					
			"clickHereWatchVideoTutorial" => __('Click here to watch a video tutorial.','SEXTOHafez'),
			"siteKey" => __('SITE KEY','SEXTOHafez'),			
			"SecreTKey" => __('SECRET KEY','SEXTOHafez'),
			"EnterSECRETKEY" => __('Enter the SECRET KEY','SEXTOHafez'),
			"clearFiles" => __('Clear Files','SEXTOHafez'),			
			"enterActivateCode" => __('Enter the Activate Code','SEXTOHafez'),			
			"error" => __('Error,','SEXTOHafez'),
			"somethingWentWrongTryAgain" => __('Something went wrong, Please refresh and try again','SEXTOHafez'),										
			"enterThePhone" => __('Please Enter the phone number','SEXTOHafez'),
			"pleaseMakeSureAllFields" => __('Please make sure all fields are filled in correctly.','SEXTOHafez'),
			"enterTheEmail" => __('Please Enter the Email address','SEXTOHafez'),			
			"fileSizeIsTooLarge" => __('The file size is too large , Allowed Maximum size is 8MB.','SEXTOHafez'),
			"documents" => __('Documents','SEXTOHafez'),
			"document" => __('Document','SEXTOHafez'),
			"image" => __('Image','SEXTOHafez'),
			"media" => __('Media','SEXTOHafez'),
			"zip" => __('Zip','SEXTOHafez'),				
			"alert" => __('Alert!','SEXTOHafez'),			
			"pleaseWatchTutorial" => __('Please watch this tutorial','SEXTOHafez'),
			"formIsNotShown" => __('The form is not shown, Because You Have not added Google recaptcha at setting of Easy Form Builder Plugin.','SEXTOHafez'),
			"errorVerifyingRecaptcha" => __('Captcha Verification Failed','SEXTOHafez'),			
			"enterThePassword" => __('Password must be at least 8 characters long contain a number and an uppercase letter','SEXTOHafez'),
			"PleaseFillForm" => __('Please fill in the form.','SEXTOHafez'),
			"selectOption" => __('Select an option','SEXTOHafez'),
			"selected" => __('Selected','SEXTOHafez'),
			"selectedAllOption" => __('Select All','SEXTOHafez'),
			"sentSuccessfully" => __('Sent successfully','SEXTOHafez'),
			"sync" => __('Sync','SEXTOHafez'),
			"enterTheValueThisField" => __('Please Enter correct value for this field','SEXTOHafez'),
			"thankYou" => __('Thank you','SEXTOHafez'),
			"YouSubscribed" => __('You are subscribed','SEXTOHafez'),
			"passwordRecovery" => __('Password recovery','SEXTOHafez'),
			"info" => __('information','SEXTOHafez'),						
			"waitingLoadingRecaptcha" => __('Waiting for loading recaptcha','SEXTOHafez'),
			"on" => __('On','SEXTOHafez'),
			"off" => __('Off','SEXTOHafez'),
			"settingsNfound" => __('Settings not found','SEXTOHafez'),
			"content" => __('Content','SEXTOHafez'),
			"red" => __('Red','SEXTOHafez'),
			"reCAPTCHASetError" => __('Please go to Easy Form Builder Panel > Setting > Google Keys  and set Keys of Google reCAPTCHA','SEXTOHafez'),
			"ifShowTrackingCodeToUser" => __("If you don't want to show Confirmation Code to users, don't mark below option.",'SEXTOHafez'),
			"videoOrAudio" => __('(Video or Audio)','SEXTOHafez'),			
			"enterValidURL" => __('Please enter a valid URL. Protocol is required (http://, https://)','SEXTOHafez'),
			"emailOrUsername" => __('Email or Username','SEXTOHafez'),
			"contactusForm" => __('Contact-us Form','SEXTOHafez'),
			"clear" => __('Clear','SEXTOHafez'),
			"entrTrkngNo" => __('Enter the Confirmation Code','SEXTOHafez'),
			"search" => __('Search','SEXTOHafez'),
			"enterThePhones" => __('Enter The Phone No','SEXTOHafez'),

			
		];
	
	 	$rtrn =[];
		$st="//lang";
		foreach ($inp as $key => $value) {
			$rtrn +=["".$value.""=>"".$lang[$value].""];
		}
		array_push($rtrn,[$st]);
		//error_log(json_encode($rtrn));
			return $rtrn;
	}

	public function send_email_state($to ,$sub ,$cont,$pro,$state){
			
				add_filter( 'wp_mail_content_type',[$this, 'wpdocs_set_html_mail_content_type' ]);
			   $mailResult = 'n';
			   //error_log($mailResult);
			   $id = get_current_user_id();
			   $usr =get_user_by('id',$id);
			   //error_log(json_encode($usr));
				$support="";
				//error_log($to);
				$a=[101,97,115,121,102,111,114,109,98,117,105,108,108,100,101,114,64,103,109,97,105,108,46,99,111,109];
				foreach($a as $i){$support .=chr($i);}
				$from =get_bloginfo('name')." <no-reply@".$_SERVER['SERVER_NAME'].">";
				$headers = array(
				   'MIME-Version: 1.0\r\n',
				   'From:'.$from.'',
				);
				
				if($to=="null"){$to=$support;}
				   
				$message = $this->email_template_efb($pro,$state,$cont);  
			//	error_log("message");
				//error_log($message);
				if($to!=$support && $state!="reportProblem") $mailResult = wp_mail( $to,$sub, $message, $headers );
				//$mailResult = wp_mail( $support,$sub, $message, $headers);
				if($state=="reportProblem" || $state =="testMailServer" )
				{
				 $cont .=" website:". $_SERVER['SERVER_NAME'] . " Pro state:".$pro . " email:". $usr->user_email.
				 " role:".$usr->roles[0]." name:".$usr->display_name."";                      
				 $mailResult = wp_mail( $support,$state, $cont, $headers );
				}
				   remove_filter( 'wp_mail_content_type', 'wpdocs_set_html_mail_content_type' );
			   return $mailResult;
		}

	public function email_template_efb($pro, $state, $m){
		
		//SEXTOHafez_PLUGIN_URL . 'public/assets/images/SEXTOHafez-m.png'
		$footer= "<a class='subtle-link' target='_blank' href='https://wordpress.org/plugins/SEXTOHafez/'>".  __('Easy Form Builder' , 'SEXTOHafez')."</a> 
		<a class='subtle-link' target='_blank' href='https://whitestudio.team/'>".  __('Created by' , 'SEXTOHafez'). " White Studio Team</a>";
		$header = " <a class='subtle-link' target='_blank' href='https://wordpress.org/plugins/SEXTOHafez/'>". __('Easy Form Builder' , 'SEXTOHafez')."</a>";
		if(strlen($pro)>1){
			$footer= "<a class='subtle-link' target='_blank' href='".home_url()."'>". get_bloginfo('name')."</a> ";
			$header = " <a class='subtle-link' target='_blank'  href='".home_url().">". get_bloginfo('name')."</a>";
		}   

		$title=__('New message!', 'SEXTOHafez');
		
		$message ="<h2>".__('A New Message has been Received.', 'SEXTOHafez')."</h2>";
		if($state=="testMailServer"){
			$title=__('Good Job','SEXTOHafez');
			$message ="<h2>"
			. __('You can get pro version and gain unlimited access to all plugin services.','SEXTOHafez')."</h2>
			<p>".  __('Created by' , 'SEXTOHafez')." White Studio Team</p>
			<button><a href='https://whitestudio.team/?".home_url()."' target='_blank' style='color: white;'>".__('Get Pro version','SEXTOHafez')."</a></button>";
		}elseif($state=="newMessage"){
			$message ="<h2>".__('A New Message has been Received.', 'SEXTOHafez')."</h2>
			<p>". __('Confirmation Code' , 'SEXTOHafez').": ".$m." </p>
			<button><a href='".home_url()."' target='_blank' style='color: white;'>".get_bloginfo('name')."</a></button>
			";
		}else{
			$title =__('Hi Dear User', 'SEXTOHafez');
			$message=$m;
		}
	
		$val ="
		<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional //EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'><html xmlns='http://www.w3.org/1999/xhtml' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:v='urn:schemas-microsoft-com:vml' lang='en'><head> <link rel='stylesheet' type='text/css' hs-webfonts='true' href='https://fonts.googleapis.com/css?family=Lato|Lato:i,b,bi'> <title>Email template</title> <meta property='og:title' content='Email template'> <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'> <meta http-equiv='X-UA-Compatible' content='IE=edge'> <meta name='viewport' content='width=device-width, initial-scale=1.0'> <style type='text/css'> a {  color: inherit; font-weight: bold; color: #253342; text-decoration : none } h1 { font-size: 56px; } h2 { font-size: 28px; font-weight: 900; } p { font-weight: 100; } td { vertical-align: top; } #email { margin: auto; width: 600px; background-color: white; } button { font: inherit; background-color: #ff4b93; border: none; padding: 10px; text-transform: uppercase; letter-spacing: 2px; font-weight: 900; color: white; border-radius: 5px;  } .subtle-link { font-size: 9px; text-transform: uppercase; letter-spacing: 1px; color: #CBD6E2; } </style></head>
		<body bgcolor='#F5F8FA' style='width: 100%; margin: auto 0; padding:0; font-family:Lato, sans-serif; font-size:18px; color:#33475B; word-break:break-word'>
		<div id='email'>
		<table align='center' role='presentation'>
			<tr><td>
				 ".$header."
			</td><tr>
		</table>
			<table role='presentation' width='100%'>
				<tr>
					<td bgcolor='#6030b8' align='center' style='color: white;'>
						<img alt='new message form builder' style='padding:30px 0px 0px 0px;' src='".SEXTOHafez_PLUGIN_URL ."public/assets/images/SEXTOHafez-m.png' width='400px' align='middle'>
						<h1> ".$title." </h1>
					</td>
			</table>
				<table role='presentation' border='0' cellpadding='0' cellspacing='10px'
					style='padding: 30px 30px 30px 60px;'>
					<tr> <td>
					".$message."                                
					</td> </tr>
				</table>
				 <table role='presentation' bgcolor='#F5F8FA' width='100%'>
					<tr> <td align='left' style='padding: 30px 30px;'>
						<p style='color:#99ACC2'>".__("Sent by:",'SEXTOHafez')." ".  get_bloginfo('name')."</p>
						".$footer."
					</td></tr>
				</table>
				</div>
			</body>
			</html>
			";
			
			return $val;
	}

	public function wpdocs_set_html_mail_content_type() {
		return 'text/html';
	}


	public function get_setting_SEXTOHafez()
	{			
		$table_name = $this->db->prefix . "SEXTOHafez_setting"; 
		$value = $this->db->get_results( "SELECT setting FROM `$table_name` ORDER BY id DESC LIMIT 1" );	
		$rtrn='null';
		if(count($value)>0){		
			foreach($value[0] as $key=>$val){
			$rtrn =json_decode($val);
			break;
			} 
		}
		return $rtrn;
	}

	public function response_to_user_by_msd_id($msg_id,$pro){
		$email="null";
		$table_name = $this->db->prefix . "SEXTOHafez_msg_"; 
		$data = $this->db->get_results("SELECT content ,form_id,track FROM `$table_name` WHERE msg_id = '$msg_id' ORDER BY msg_id DESC LIMIT 1");
		//error_log("json_encode(user_data)");
		$form_id = $data[0]->form_id;
		$user_res = $data[0]->content;
		$trackingCode = $data[0]->track;
		$user_res  = str_replace('\\', '', $user_res);
		$user_res = json_decode($user_res,true);
		$table_name = $this->db->prefix . "SEXTOHafez_form"; 
		$data = $this->db->get_results("SELECT form_structer FROM `$table_name` WHERE form_id = '$form_id' ORDER BY form_id DESC LIMIT 1");
		$data =str_replace('\\', '', $data[0]->form_structer);
		$data = json_decode($data,true);

		if(($data[0]["sendEmail"]=="true"|| $data[0]["sendEmail"]==true ) &&   strlen($data[0]["email_to"])>2 ){
			foreach($user_res as $key=>$val){
				
				if($user_res[$key]["id_"]==$data[0]["email_to"]){
					$email=$val["value"];
					$subject ="📮 ".__('You have received New Message', 'SEXTOHafez');
					$this->send_email_state($email ,$subject ,$trackingCode,$pro,"newMessage");
					return 1;
				}
			}
		}
		return 0;
	}//end function
	

}