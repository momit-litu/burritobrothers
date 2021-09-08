<?php
session_start();
include("../includes/dbConnect.php");
include("../includes/dbClass.php");
$dbClass = new dbClass;

if(!isset($_SESSION['customer_id']) && $_SESSION['customer_id']!=""){
ob_start(); header("Location:error.php"); exit();
}
//echo $_SESSION['customer_id']; die;
//var_dump($_SESSION);

$termCondition = $dbClass->getSingleRow("select * from web_menu where id=43");


?>

<section class="container">
    <?php echo $termCondition['description'];?>
</section>
<!--
<section class="container">
    <h3>BURRITO BROTHERS' TERMS OF USE</h3>

    <p>These Terms of Use (“Terms”) govern your access to, and use of, the websites (each, a “Site” or “Website”),
        mobile applications, the mobile text program, third party messaging platforms, and online services or programs
        (collectively, the “Services”) operated by or on behalf of the Burrito Brothers Mexican Grill group of companies (“Burrito Brothers”)
        and on which these Terms appear. These Terms are a legal and binding agreement between you and Burrito Brothers.
        Your use of the Services indicates your acceptance of these terms. Do not use the Services if you do not agree
        to be bound by these Terms.</br>

        Burrito Brothers strives to ensure that the information contained on the Services is accurate and reliable.
        However, Burrito Brothers and the Services are not infallible and errors may sometimes occur. Therefore,
        to the fullest extent permissible pursuant to the applicable law, Burrito Brothers makes no representations
        about the reliability of the features of the Services, the Burrito Brothers Content (defined below),
        Submitted Content (defined below), or any other Service feature. You acknowledge that any reliance on such
        material and/or systems will be at your own risk. Burrito Brothers is not responsible for the information,
        data, text, or other materials that may appear in Submitted Content or may otherwise be submitted by users.
        Opinions expressed in Submitted Content do not necessarily reflect the opinions of Burrito Brothers, and
        Burrito Brothers does not endorse, and has no control over, Submitted Content. Submitted Content is not
        necessarily reviewed by Burrito Brothers prior to posting and Burrito Brothers makes no warranties,
        express or implied, as to the Submitted Content or to the accuracy and reliability of the Submitted Content.
        Burrito Brothers makes no representations regarding the amount of time that any Burrito Brothers Content or
        Submitted Content will be preserved.</br></br>

        The Services are provided on an “as is, as available” basis without any representation or warranty, express
        or implied, of any kind. To the fullest extent permitted by law, Burrito Brothers hereby disclaims all warranties
        of any kind or nature, including, but not limited to, the implied warranties of merchantability, accuracy,
        non-infringement, and fitness for any particular purpose. Burrito Brothers disclaims any and all liability
        for the acts, omissions, and conduct of any third-party service providers, partners, sponsors, licensors,
        licensees, and the like (“Providers”) in connection with or related to your use of the Services and materials,
        programs, and features made available therein.</br>

        In no event shall Burrito Brothers or any of Burrito Brothers’s Providers be liable to any person for damages
        of any kind under any legal theory, including, but not limited to, any direct, indirect, special, consequential,
        punitive, or other damages (lost profits, business interruption, or loss of information, programs, or data)
        resulting from your use or inability to use the Services, even if Burrito Brothers has been advised of the
        possibility of such damages. Because some states do not permit the exclusion or limitation of certain damages,
        in such jurisdictions, liability is limited to the fullest extent permitted by such state law.</p></br>

    <h4>INDEMNIFICATION</h4>
    <p>You agree to indemnify, defend, and hold harmless Burrito Brothers, its affiliates, its providers, and its
            officers, directors, employees, attorneys, and agents from and against any and all claims, damages, losses,
            costs (including reasonable attorneys’ fees), and expenses that arise directly or indirectly out of or from: (1) your breach of these Terms; and/or (2) your activities in connection with the Services and/or materials, programs, and features made available therein</p></br>
    <h4>COMMUNICATING WITH BURRITO BROTHERS</h4>
    <p>The Services may give you the ability to contact Burrito Brothers by electronic mail, for example, to sign up for services such as e-mail notifications and newsletters about Burrito Brothers’s products or to register for a particular sweepstakes or contest. The information that you provide to Burrito Brothers through the Services is governed by Burrito Brothers’s Privacy Policy.</p></br>
    <h4>BURRITO BROTHERS PROPERTY</h4>
    <p> The Services contain many valuable trademarks owned and used by Burrito Brothers throughout the world. These trademarks are used to distinguish Burrito Brothers’s quality products and services. The text, graphics, and html code contained on this Website and throughout the Services are the exclusive property of Burrito Brothers (“Burrito Brothers Content”). Burrito Brothers Content is protected from reproduction and simulation under national and international laws and, except where otherwise noted, is not to be copied, distributed, displayed, reproduced, or transmitted in any form, by any means, without the prior express written consent of Burrito Brothers.</p></br>
    <h4>USER-SUBMITTED CONTENT</h4>
    <p>Certain areas of the Services be enable you to submit remarks, ideas, images, photos, suggestions, graphics, and/or other materials and content (“Submitted Content”). You acknowledge that you are responsible for whatever material you submit, and you, not Burrito Brothers, have full responsibility for the message, including its legality, reliability, appropriateness, originality, and copyright. By posting, displaying, publishing, or otherwise submitting Submitted Content on or through the Services, you understand and acknowledge that any materials, ideas, or other communications you transmit will not be treated as confidential or proprietary. Furthermore, such Submitted Content will forever be the property of Burrito Brothers and Burrito Brothers is entitled to use the Submitted Content for any commercial or other purpose whatsoever without compensation to you.</p></br>
    <h4> ONLINE PURCHASES</h4>
    <p>To purchase food products, merchandise, or other items through the Services, you must provide valid payment card and billing information. Such information will be collected by Burrito Brothers. Your information will be collected and used in accordance with Burrito Brothers’s Privacy Policy. When you purchase items through the Services, prices will be made clear during the order process. You agree to pay the price that is stated at the time of your order, as well as any applicable taxes. You also agree to have your payment card billed for the total amount displayed at check out. By purchasing items through the Services, you represent and warrant to Burrito Brothers that you are capable of entering into a contract under the applicable law.</p>
    <h4>WEBSITE ACCESS</h4>
    <p>Burrito Brothers hereby grants you permission to use the Services as set forth in these Terms, provided that: (i) your use of the Services as permitted is solely for your personal, noncommercial use; (ii) you will not copy or distribute any part of the Services in any medium without Burrito Brothers’s prior written authorization; (iii) you will not alter or modify any part of the Services other than as may be reasonably necessary to use the Services for their intended purpose; and (iv) you will otherwise comply with these Terms.<p></br>
    <p> In order to access some features of the Services, you will have to create an account. You may never use another’s account without permission. When creating your account, you must provide accurate and complete information. You are solely responsible for the activity that occurs on your account, and you must keep your account password secure. Although Burrito Brothers will not be liable for your losses caused by any unauthorized use of your account, you may be liable for the losses of Burrito Brothers or others due to such unauthorized use.<p></br>
    <h4>HYPERLINKS</h4>
    <p>The Services may link to sites not maintained by or related to Burrito Brothers. Hypertext links are provided as a service to users and are not necessarily sponsored by or affiliated with the Services or Burrito Brothers. Burrito Brothers has not necessarily reviewed the sites hyperlinked to or from the Services and is not responsible for the content of any other site. These links are to be accessed at the user’s own risk. Burrito Brothers makes no representations or warranties about the content, completeness, or accuracy of these links or the sites hyperlinked to or from the Services. Furthermore, Burrito Brothers does not implicitly endorse third-party sites hyperlinked to or from this Website.<p></br>
    <h4>TEXT MESSAGING NOTICE</h4>
    <p> If you choose to participate in any Burrito Brothers promotion that may involve the use of text messaging (either sending or receiving), Burrito Brothers will not charge you for the text messaging; however, standard text messaging rates will apply to each text message sent or received as provided in your wireless rate plan (contact your carrier for pricing plans and details).<p></br>
    <h4> MOBILE TERMS & CONDITIONS</h4>
    <h4> MOBILE ALERTS</h4>
    <ul>
        <li>You must be 13 years of age or older to participate in the Burrito Brothers mobile text program.</li>
        <li>By participating in the Burrito Brothers mobile text program and signing up for mobile offers and text updates, you consent to receive future recurring automated marketing text messages to the mobile number provided from or on behalf of Burrito Brothers. You also acknowledge that your agreement to receive these messages isn’t required as a condition of purchase.
        </li>
        <li>Message and data rates may apply. All charges are billed by and payable to your mobile service provider. Burrito Brothers does not charge you for sending or receiving text messages to 888222</li>
        <li>If you would like to be removed from the Burrito Brothers mobile text program, you must text STOP to 888222 (U.S.) or 888333 (Canada) to opt-out. This is the exclusive method for opting out. After texting STOP to 888222 you will receive one additional message confirming that your request has been processed.</li>
        <li>Burrito Brothers reserves the right to remove subscribers from our messaging database at our discretion. For more information, reply “HELP” to 888222 (U.S.) or 888333 (Canada) or contact us here.</li>
        <li>In the event that you change or deactivate your mobile number it is your responsibility to notify Burrito Brothers here to have your number removed.</li>
        <li>Burrito Brothers will not be liable for any delays in the receipt of any SMS messages or undelivered messages. T-Mobile policies require that we specify that T-Mobile, also, will not be liable for any delays in the receipt of any SMS messages or undelivered messages.</li>
        <li>Data obtained from you in connection with this SMS service may include your cell phone number, your carrier's name, the date, time and content of your messages and other information you provide to us as part of this service. We may use this information to contact you and to provide the services you request from us.</li>
        <li>These terms and conditions are subject to change at any time without notice.</li>
    </ul></br>

    <h4>VIOLATION OF THESE TERMS AND REMEDIES</h4>
    <p>You agree that Burrito Brothers may, in its sole discretion and without prior notice, block and/or terminate your access to the Services if Burrito Brothers determines that you have violated these Terms or other agreements or guidelines that may be associated therewith. You also agree that any violation, or threatened violation, by you of these Terms constitutes an unlawful and unfair business practice, and will cause irreparable and unquantifiable harm to Burrito Brothers. You also agree that monetary damages would be inadequate for such harm and consent to Burrito Brothers’s obtaining any injunctive or equitable relief that Burrito Brothers deems necessary or appropriate. These remedies are in addition to any other remedies that Burrito Brothers may have at law or in equity.
    </p></br>
    <p>If Burrito Brothers takes legal action against you as a result of your violation of these Terms, Burrito Brothers will be entitled to recover from you, and you agree to pay, all reasonable attorneys’ fees and costs of such action, in addition to any other relief granted to Burrito Brothers. You agree that Burrito Brothers will not be liable to you or to any third party for termination of your access to the Services, mobile app, programs, and/or services as a result of any violation of these Terms.</p></br>

    <h4> GOVERNING LAW AND JURISDICTION</h4>
    <p>These Terms are governed by United States law and are subject to all applicable federal, state, and local laws and regulations. All issues and questions concerning the construction, validity, interpretation, and enforceability of these Terms, or the rights and obligations of you or Burrito Brothers in connection with your use of the Services or your Submitted Content, shall be governed by, and construed in accordance with, the laws of the State of Colorado, without giving effect to the conflict of laws rules thereof.</p></br>
    <h4> DISPUTE RESOLUTION, ARBITRATION CLAUSE AND CLASS ACTION WAIVER</h4>
    <p>You agree that any claim or dispute at law or equity that has arisen or may arise relating in any way to or arising out of these Terms will be resolved in accordance with the provisions set forth in this Dispute Resolution section. PLEASE READ THIS SECTION CAREFULLY. IT AFFECTS YOUR RIGHTS AND WILL HAVE A SUBSTANTIAL IMPACT ON HOW CLAIMS YOU AND WE HAVE AGAINST EACH OTHER ARE RESOLVED.</p></br>
    <p>You agree that whenever you have a disagreement with Burrito Brothers arising out of, connected to, or in any way related to these Terms, you will send a written notice to Burrito Brothers (“Demand”). You agree that the requirements of this Dispute Resolution section will apply even to disagreements that may have arisen before you accepted these Terms. You must send the Demand to the following address (the “Notice Address”): Legal Department, Burrito Brothers Mexican Grill c/o CMG Strategy Co., LLC, 610 Newport Center Dr., Suite 1300, Newport Beach, CA 92660. You agree that you will not take any legal action, including filing a lawsuit or demanding arbitration, until 20 business days after you send a Demand. If the disagreement stated in the Demand is not resolved to your satisfaction within 10 business days after it is received, and you intend on taking legal action, you agree that you will file a demand for arbitration with the American Arbitration Association (the “Arbitrator”). This arbitration provision limits the ability of you and Burrito Brothers to litigate claims in court and you and Burrito Brothers each agree to waive your respective rights to a jury trial or a state or federal judge. There is no judge or jury in arbitration, and court review of an arbitration award is limited. However, an arbitrator can award on an individual basis the same damages and relief as a court (including injunctive and declaratory relief or statutory damages), and must follow these Terms as a court would. You agree that you will not file any lawsuit against Burrito Brothers in any state or federal court. You agree that if you do sue in state or federal court, and Burrito Brothers brings a successful motion to compel arbitration, you must pay all fees and costs incurred by Burrito Brothers in court, including reasonable attorney’s fees. For any such filing of a demand for arbitration, you must effect proper service under the rules of the Arbitrator and notice to the Notice Address may not be sufficient. If, for any reason, the American Arbitration Association is unable to conduct the arbitration, you may file your case with any national arbitration company. The Arbitrator shall apply the AAA Consumer-Related Disputes Supplementary Procedure effective September 15, 2005 (as may be amended) and as modified by the agreement to arbitrate in this Dispute Resolution section. You agree that the Arbitrator will have sole and exclusive jurisdiction over any dispute you have with Burrito Brothers. The Federal Arbitration Act allows for the enforcement of arbitration agreements and governs the interpretation and enforcement of the agreement to arbitrate.</p></br>
    <p>You agree that you will not file a class action or collective action against Burrito Brothers, and that you will not participate in a class action or collective action against them. You agree that you will not join your claims to those of any other person. Notwithstanding any other provision in these Terms, if this class action waiver is invalidated, then the agreement to arbitrate is null and void, as though it were never entered into, and any arbitration dispute at that time will be dismissed without prejudice and may be refiled in a court. Under no circumstances do you or Burrito Brothers agree to class or collective procedures in arbitration or the joinder of claims in arbitration. Burrito Brothers agrees that we will submit all disputes with you to arbitration before the Arbitrator.</p></br>
    <h4>MISCELLANEOUS</h4>
    <p>These Terms constitute the entire agreement between you and Burrito Brothers and govern your use of the Services and supersede all prior or contemporaneous communications and proposals whether electronic, oral or written, between you and Burrito Brothers with respect to the Services. Both you and Burrito Brothers acknowledge and agree that no partnership is formed and neither you nor Burrito Brothers has the power or the authority to obligate or bind the other.</p></br>
    <p>The failure of Burrito Brothers to exercise or enforce any right or provision of these Terms shall not constitute a waiver of such right or provision. If any provision of these Terms is found by a court of competent jurisdiction to be invalid or unenforceable, the parties nevertheless agree that the court should endeavor to give effect to the parties’ original intentions as reflected in the provision, and the other provisions of the Terms shall remain in full force and effect.</p></br>
    <p>The failure of Burrito Brothers to comply with these Terms because of an act of God, war, fire, riot, terrorism, earthquake, actions of federal, state, or local governmental authorities, or for any other reason beyond the reasonable control of Burrito Brothers shall not be deemed a breach of this agreement. If Burrito Brothers fails to act with respect to your breach or anyone else’s breach on any occasion, Burrito Brothers is not waiving its right to act with respect to future or similar breaches.</p></br>
    <p>The headings in these Terms are for your convenience and reference. These headings do not limit or affect this agreement.</p></br>
    <p>If any provision of these Terms shall be unlawful, void, or for any reason unenforceable, then that provision shall be deemed severable from these Terms and shall not affect the validity and enforceability of any remaining provisions.</p></br>
    <h4>BINDING AGREEMENT<h4>
    <p>  These Terms constitute a binding agreement between you and Burrito Brothers, and are accepted by you upon your use of the Services. This agreement constitutes the entire agreement between you and Burrito Brothers regarding the use of the Services and the features therein and supersedes and replaces any prior agreements between you and Burrito Brothers regarding the use of the Services. By using the Services, you represent that you are capable of entering into a binding agreement, and that you agree to be bound by these Terms.</p>
</section>

-->