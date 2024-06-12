
  @extends('frontend.master')

  @section('content')
  <div class="container">
	<div class="row">
		<div class="col-md-12 ">
    <form name="tandc" ng-submit="approveTandC()">
        <div class="panel panel-default" style="margin-top:20px;">
            <div class="panel-body" style=" background-color:white;">
                <div>
                    <h1>Terms and Conditions</h1>
                    <p>
                        Welcome to UAEBankingSol's Terms and Conditions page. By accessing and using our website (www.uaebankingsol.com), you agree to comply with the following terms and conditions outlined below. These terms govern your use of our website and any services provided by BankingSol.
                    </p>
                    <ol>
                        <li>
                            <strong>Acceptance of Terms:</strong> By accessing or using our website, you acknowledge that you have read, understood, and agree to be bound by these terms and conditions. If you do not agree with any part of these terms, please refrain from using our website.
                        </li>
                        <li>
                            <strong>Use of Website:</strong> 
                            <ul>
                                <li>You agree to use our website solely for lawful purposes and in a manner consistent with all applicable laws and regulations.</li>
                                <li>You must not use our website in any way that may cause damage to the website or impair its availability or accessibility.</li>
                            </ul>
                        </li>
                        <li>
                            <strong>Privacy Policy:</strong> Our Privacy Policy outlines how we collect, use, and protect your personal information. By using our website, you consent to the collection and use of your data in accordance with our Privacy Policy.
                        </li>
                        <li>
                            <strong>Intellectual Property:</strong> All content and materials on our website, including text, graphics, logos, images, and software, are the property of UAEBankingSol and are protected by copyright and other intellectual property laws.
                        </li>
                        <li>
                            <strong>Limitation of Liability:</strong> UAEBankingSol shall not be liable for any direct, indirect, incidental, special, or consequential damages arising out of or in any way connected with the use of our website or services.
                        </li>
                        <li>
                            <strong>Changes to Terms:</strong> UAEBankingSol reserves the right to modify or update these terms and conditions at any time without prior notice. It is your responsibility to review these terms periodically for changes.
                        </li>
                        <li>
                            <strong>Governing Law:</strong> These terms and conditions shall be governed by and construed in accordance with the laws of the United Arab Emirates.
                        </li>
                    </ol>
                    <p>
                        Contact Us: If you have any questions or concerns regarding these terms and conditions, please contact us at <a  href="mailto:info@uaebankingsol.com">info@uaebankingsol.com</a>.
                    </p>
                </div>
            </div>
        </div>
        <div style="text-align:center;" ng-if="settings.Authentication.RequireTermsAndConditions && !UserInfo.approvedTermsAndConditions && UserInfo.isAuthenticated">
            <button style="margin:20px;" href="#" class="btn btn-primary" type="submit">Agree to Terms and Conditions</button>
        </div>
    </form>
</div>

	</div>
</div>
      



            
  @endsection
