<?php /* Template Name: PriceTableNew */
get_header();
?>

    <section id="primary" class="content-area" style="overflow: -webkit-paged-y;">
        <main id="main" class="site-main">

            <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <!--        <link rel="stylesheet" href="/resources/demos/style.css">-->
            <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <style>
                #custom-handle {
                    width: 3em;
                    height: 1.6em;
                    top: 50%;
                    margin-top: -.8em;
                    text-align: center;
                    line-height: 1.6em;
                }
            </style>

            <script>
                var dist = 0;
                var stp=1;
                var vals=[];
                var i=0;
                while(i<=100000){
                    vals.push(i);
                    if(i>=50000){
                        i+=10000;
                    }
                    else if(i>=10000){
                        i+=1000;
                    }
                    else if(i>=5000){
                        i+=500;
                    }
                    else {
                        i+=100
                    }
                }
                vals.push();
                $(function () {
                    var handle = $( "#custom-handle" );
                    $("#slider-vertical").slider({
                        orientation: "horizontal",
                        // range: "min",
                        min: 0,
                        max: vals.length-1,
                        step: stp,
                        value: 10,
                        slide: function (event, ui) {
                            // var t=1000;
                            // var i=ui.value;
                            // var a=i/t*ui.clientWidth;
                            // var r=-12*(i/(t/2)-1);
                            handle.text(vals[ui.value]);
                            console.log($("#slider-vertical").slider("value"));
                            $("#amount").val(vals[ui.value]);
                            // if(ui.value<=50000){
                            //     $("#amount").val(ui.value*10/100);
                            // }
                            // else if(ui.value<=55000){
                            //     $("#amount").val(ui.value*20/100);
                            // }
                            // else if(ui.value<=60000){
                            //     $("#amount").val(ui.value*30/100);
                            // }
                            // else if(ui.value<=65000){
                            //     $("#amount").val(ui.value*40/100);
                            // }
                            // else if(ui.value<=70000){
                            //     $("#amount").val(ui.value*50/100);
                            // }
                            // else if(ui.value<=75000){
                            //     $("#amount").val(ui.value*60/100);
                            // }
                            // else if(ui.value<=80000){
                            //     $("#amount").val(ui.value*70/100);
                            // }
                            // else if(ui.value<=85000){
                            //     $("#amount").val(ui.value*80/100);
                            // }
                            // else if(ui.value<=90000){
                            //     $("#amount").val(ui.value*90/100);
                            // }
                            // else if(ui.value<=95000){
                            //     $("#amount").val(ui.value);
                            // }
                            // if(ui.value>=50){
                            //     stp=0.1;
                            //     $("#amount").val(parseInt($("#amount").val())+100);
                            // }
                            // else {
                            //     stp=1;
                            //     $("#amount").val(ui.value*100);
                            // }

                            priceChange();
                        }
                    });
                    $("#amount").val(1000);
                    $('#defaultSelected').focus();
                    $('.btndist').on('click',function(){
                        $('button').removeClass('bgblack');
                        $(this).addClass('bgblack');
                    });
                });

                function distChange(d) {
                    dist = d;
                    priceChange();
                }


                function priceChange() {
                    setTimeout(function () {
                        // var ui = $("#slider-vertical").slider("value");
                        var ui = parseInt($("#amount").val());
                        if (ui >= 51100) {
                            var b = 400 - (400 * dist / 100);
                            var es = 445 - (445 * dist / 100);
                            var p = 515 - (515 * dist / 100);
                            var en = 1199 - (1199 * dist / 100);
                            jQuery('#basicPrice').html(b);
                            jQuery('#essentialPrice').html(es);
                            jQuery('#professionalPrice').html(p);
                            jQuery('#enterprisePrice').html(en);
                        } else if (ui >= 25100) {
                            var b = 220 - (220 * dist / 100);
                            var es = 265 - (265 * dist / 100);
                            var p = 329 - (329 * dist / 100);
                            var en = 1199 - (1199 * dist / 100);
                            jQuery('#basicPrice').html(b);
                            jQuery('#essentialPrice').html(es);
                            jQuery('#professionalPrice').html(p);
                            jQuery('#enterprisePrice').html(en);
                        } else if (ui >= 10100) {
                            var b = 129 - (129 * dist / 100);
                            var es = 159 - (159 * dist / 100);
                            var p = 225 - (225 * dist / 100);
                            var en = 1199 - (1199 * dist / 100);
                            jQuery('#basicPrice').html(b);
                            jQuery('#essentialPrice').html(es);
                            jQuery('#professionalPrice').html(p);
                            jQuery('#enterprisePrice').html(en);
                        } else if (ui >= 5100) {
                            var b = 59 - (59 * dist / 100);
                            var es = 85 - (85 * dist / 100);
                            var p = 145 - (145 * dist / 100);
                            var en = 1199 - (1199 * dist / 100);
                            jQuery('#basicPrice').html(b);
                            jQuery('#essentialPrice').html(es);
                            jQuery('#professionalPrice').html(p);
                            jQuery('#enterprisePrice').html(en);
                        } else if (ui >= 2600) {
                            var b = 40 - (40 * dist / 100);
                            var es = 69 - (69 * dist / 100);
                            var p = 125 - (125 * dist / 100);
                            var en = 1199 - (1199 * dist / 100);
                            jQuery('#basicPrice').html(b);
                            jQuery('#essentialPrice').html(es);
                            jQuery('#professionalPrice').html(p);
                            jQuery('#enterprisePrice').html(en);
                        } else if (ui >= 1100) {
                            var b = 22 - (22 * dist / 100);
                            var es = 55 - (55 * dist / 100);
                            var p = 109 - (109 * dist / 100);
                            var en = 1199 - (1199 * dist / 100);
                            jQuery('#basicPrice').html(b);
                            jQuery('#essentialPrice').html(es);
                            jQuery('#professionalPrice').html(p);
                            jQuery('#enterprisePrice').html(en);
                        } else {
                            var b = 13 - (13 * dist / 100);
                            var es = 45 - (45 * dist / 100);
                            var p = 89 - (89 * dist / 100);
                            var en = 1199 - (1199 * dist / 100);
                            jQuery('#basicPrice').html(b);
                            jQuery('#essentialPrice').html(es);
                            jQuery('#professionalPrice').html(p);
                            jQuery('#enterprisePrice').html(en);
                        }
                    }, 1100);

                }
            </script>

            <div style="margin: 0 auto; text-align: center">
                <label for="amount">Size of your list:</label>
                <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
            </div>

            <div id="slider-vertical" style="width:1000px; margin: 0 auto"><div id="custom-handle" class="ui-slider-handle"></div></div>
            <br>
            <br>
            <div style="text-align: center">
                <button type="button" class="btn-1 btndist bgblack" id="defaultSelected" style="width: 10%;" onclick="distChange(0)">1 month</button>
                <button type="button" class="btn-12 btndist" style="width: 10%;" onclick="distChange(18)">12 month<span style="font-size: 11px;font-weight: normal;padding-left: 5px;color: red;">-18%</span></button>
                <button type="button" class="btn-24 btndist" style="width: 10%;" onclick="distChange(30)">24 month<span style="font-size: 11px;font-weight: normal;padding-left: 5px;color: red;">-30%</span></button>
            </div>
            <br>
            <br>

            <!-- DIRTY Responsive pricing table HTML -->

            <article>

                <ul>
                    <li class="bg-purple">
                        <button>Self-Employed</button>
                    </li>
                    <li class="bg-blue">
                        <button>Simple Start</button>
                    </li>
                    <li class="bg-blue active">
                        <button>Essentials</button>
                    </li>
                    <li class="bg-blue">
                        <button>Plus</button>
                    </li>
                </ul>

                <table>
                    <thead>
                    <tr>
                        <th class="hide"></th>
                        <th class="bg-purple">BASIC</th>
                        <th class="bg-blue">ESSENTIAL</th>
                        <th class="bg-blue default">PROFESSIONAL</th>
                        <th class="bg-blue">ENTERPRISE</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="hide"></td>
                        <td>Perfect for email marketing experts</td>
                        <td>For marketers and SMEs that focus on growth</td>
                        <td>For marketing professionals who want quick results</td>
                        <td>For companies looking for high performance solutions</td>
                    </tr>
                    <tr>
                        <td class="hide"></td>
                        <td><span class="txt-top">&pound;</span><span class="txt-l" id="basicPrice">13</span></td>
                        <td><span class="txt-top">&pound;</span><span class="txt-l" id="essentialPrice">45</span></td>
                        <td class="default"><span class="txt-top">&pound;</span><span class="txt-l"
                                                                                      id="professionalPrice">89</span>
                        </td>
                        <td><span class="txt-top">&pound;</span><span class="txt-l" id="enterprisePrice">1199</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="hide"></td>
                        <td><button>Choose a Plan</button></td>
                        <td><button>Choose a Plan</button></td>
                        <td><button>Choose a Plan</button></td>
                        <td><button>Choose a Plan</button></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="sep">E-mail marketing</td>
                    </tr>
                    <tr>
                        <td>Email per month</td>
                        <td><span class="tick">Unlimited</span></td>
                        <td><span class="tick">Unlimited</span></td>
                        <td class="default"><span class="tick">Unlimited</span></td>
                        <td><span class="tick">Unlimited</span></td>
                    </tr>
                    <tr>
                        <td>Newsletter</td>
                        <td><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                        <td>Autoresponders</td>
                        <td><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                        <td>RSS-to-email</td>
                        <td><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                        <td>Visual email editor</td>
                        <td><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                        <td>Time travel</td>
                        <td><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                        <td>Perfect timing</td>
                        <td><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
<!--                    <tr>-->
<!--                        <td>Accept card payments in QuickBooks Online</td>-->
<!--                        <td></td>-->
<!--                        <td><span class="tick">&#10004;</span></td>-->
<!--                        <td class="default"><span class="tick">&#10004;</span></td>-->
<!--                        <td><span class="tick">&#10004;</span></td>-->
<!--                    </tr>-->
                    <tr>
                        <td colspan="5" class="sep">Autofunnel</td>
                    </tr>
                    <tr>
                        <td>Webinar funnel</td>
                        <td></td>
                        <td><span class="tick">&#10004;</span></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                        <td>Lead generation funnel</td>
                        <td></td>
                        <td><span class="tick">&#10004;</span></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                        <td>Sales funnel</td>
                        <td></td>
                        <td><span class="tick">&#10004;</span></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="sep">Landing page</td>
                    </tr>
                    <tr>
                        <td>Pages and visitors</td>
                        <td></td>
                        <td><span class="tick">Unlimited</span></td>
                        <td class="default"><span class="tick">Unlimited</span></td>
                        <td><span class="tick">Unlimited</span></td>
                    </tr>
                    <tr>
                        <td>Split test</td>
                        <td></td>
                        <td><span class="tick">&#10004;</span></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                        <td>Visual content editor</td>
                        <td><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                        <td>FREE custom domain</td>
                        <td><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td><b>Web modules / pop-up windows</b></td>
                        <td><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td colspan="5" class="sep">Automation</td>
                    </tr>

                    <tr>
                        <td>Thank you email</td>
                        <td><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                        <td>Drip marketing campaigns</td>
                        <td><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                        <td>Happy birthday email</td>
                        <td><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                        <td>Follow up of clicks and openings</td>
                        <td><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                        <td>Tagging contacts</td>
                        <td><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                        <td>Email abandoned orders</td>
                        <td></td>
                        <td><span class="tick">&#10004;</span></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                        <td><b>Unlimited workflows</b></td>
                        <td></td>
                        <td></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                        <td>Contact score</td>
                        <td></td>
                        <td></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                        <td>Email abandoned carts</td>
                        <td></td>
                        <td></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                        <td>Site monitoring and events</td>
                        <td></td>
                        <td></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                        <td>Advanced segmentation</td>
                        <td></td>
                        <td></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>

                    <tr>
                        <td colspan="5" class="sep">E-commerce tools</td>
                    </tr>

                    <tr>
                        <td>Shops and product center</td>
                        <td></td>
                        <td><span class="tick">&#10004;</span></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                        <td>Webinar</td>
                        <td></td>
                        <td><span class="tick">&#10004;</span></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>

                    <tr>
                        <td colspan="5" class="sep">Stay protected and get support</td>
                    </tr>
                    <tr>
                        <td>Participants</td>
                        <td></td>
                        <td>100</td>
                        <td class="default">300</td>
                        <td>500</td>
                    </tr>
                    <tr>
                        <td>Unlimited number of registrations</td>
                        <td></td>
                        <td><span class="tick">&#10004;</span></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                        <td>Unlimited live webinars</td>
                        <td></td>
                        <td><span class="tick">&#10004;</span></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                        <td>Unlimited paid webinars</td>
                        <td></td>
                        <td></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                        <td>Registration space</td>
                        <td></td>
                        <td>3 h</td>
                        <td class="default">6 h</td>
                        <td>10 h</td>
                    </tr>

                    <tr>
                        <td colspan="5" class="sep">Multichannel campaigns</td>
                    </tr>
                    <tr>
                        <td>Social Ads Creator</td>
                        <td><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                        <td><b>Surveys</b></td>
                        <td><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>

                    <tr>
                        <td colspan="5" class="sep">Media library</td>
                    </tr>
                    <tr>
                        <td>220 email templates</td>
                        <td><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                        <td>180 templates for landing pages</td>
                        <td></td>
                        <td><span class="tick">&#10004;</span></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                        <td>700 templates for web forms</td>
                        <td><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                        <td>40 templates for automatic funnels</td>
                        <td></td>
                        <td><span class="tick">&#10004;</span></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                        <td>5000 stock images</td>
                        <td><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>

                    <tr>
                        <td colspan="5" class="sep">150 additions including:</td>
                    </tr>
                    <tr>
                        <td>WordPress, Shopify, PrestaShop, WooCommerce, Zapier, Magento</td>
                        <td><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                        <td>Stripe, PayPal, Salesforce, Etsy</td>
                        <td></td>
                        <td><span class="tick">&#10004;</span></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td><b>Tracking and reporting</b></td>
                        <td><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr></tr>

                    <tr></tr>
                    <tr>
                        <td><b>CRM</b></td>
                        <td></td>
                        <td><span class="tick">&#10004;</span></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td colspan="5" class="sep">Stay protected and get support</td>
                    </tr>
                    <tr>
                        <td>LiveChat</td>
                        <td><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Email support</td>
                        <td><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Dedicated customer manager</td>
                        <td></td>
                        <td></td>
                        <td class="default"></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>

                    <tr></tr>
                    <tr>
                        <td><b>Account users</b></td>
                        <td>1</td>
                        <td>3</td>
                        <td class="default">5</td>
                        <td>10</td>
                    </tr>
                    <tr></tr>

                    <tr>
                        <td colspan="5" class="sep">Enterprise</td>
                    </tr>
                    <tr>
                        <td>Custom DKIM</td>
                        <td></td>
                        <td></td>
                        <td class="default"><span class="tick">&#10004;</span></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                        <td>Campaign advice</td>
                        <td></td>
                        <td></td>
                        <td class="default"></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                        <td>SSO (single sign-on)</td>
                        <td></td>
                        <td></td>
                        <td class="default"></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                        <td>Customer manager</td>
                        <td></td>
                        <td></td>
                        <td class="default"></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                        <td>Dedicated infrastructure</td>
                        <td></td>
                        <td></td>
                        <td class="default"></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                        <td>Dedicated IP address</td>
                        <td></td>
                        <td></td>
                        <td class="default"></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                        <td>Maximum performance of sending emails</td>
                        <td></td>
                        <td></td>
                        <td class="default"></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                        <td>Consultancy on deliverability</td>
                        <td></td>
                        <td></td>
                        <td class="default"></td>
                        <td><span class="tick">&#10004;</span></td>
                    </tr>

                    </tbody>
                </table>

            </article>

            <style>
                /* DIRTY Responsive pricing table CSS */

                /*
                - make mobile switch sticky
                */
                * {
                    box-sizing: border-box;
                    padding: 0;
                    margin: 0;
                    outline: 0;
                }

                body {
                    font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
                    font-size: 14px;
                    padding: 14px;
                }
                .bgblack{
                    background: #000000;
                }

                article {
                    width: 100%;
                    max-width: 1000px;
                    margin: 0 auto;
                    height: 1000px;
                    position: relative;
                }

                ul {
                    display: flex;
                    top: 0px;
                    z-index: 10;
                    padding-bottom: 14px;
                }

                li {
                    list-style: none;
                    flex: 1;
                }

                li:last-child {
                    border-right: 1px solid #DDD;
                }

                button {
                    width: 100%;
                    border: 1px solid #DDD;
                    border-right: 0;
                    border-top: 0;
                    padding: 10px;
                    background: #FFF;
                    font-size: 14px;
                    font-weight: bold;
                    height: 60px;
                    color: #999
                }

                li.active button {
                    background: #F5F5F5;
                    color: #000;
                }

                table {
                    border-collapse: collapse;
                    table-layout: fixed;
                    width: 100%;
                }

                th {
                    background: #F5F5F5;
                    display: none;
                }

                td, th {
                    height: 53px
                }

                td, th {
                    border: 1px solid #DDD;
                    padding: 10px;
                    empty-cells: show;
                }

                td, th {
                    text-align: left;
                }

                td + td, th + th {
                    text-align: center;
                    display: none;
                }

                td.default {
                    display: table-cell;
                }

                .bg-purple {
                    border-top: 3px solid #A32362;
                }

                .bg-blue {
                    border-top: 3px solid #0097CF;
                }

                .sep {
                    background: #F5F5F5;
                    font-weight: bold;
                }

                .txt-l {
                    font-size: 28px;
                    font-weight: bold;
                }

                .txt-top {
                    position: relative;
                    top: -9px;
                    left: -2px;
                }

                .tick {
                    font-size: 18px;
                    color: #2CA01C;
                }

                .hide {
                    border: 0;
                    background: none;
                }

                @media (min-width: 640px) {
                    ul {
                        display: none;
                    }

                    td, th {
                        display: table-cell !important;
                    }

                    td, th {
                        width: 330px;

                    }

                    td + td, th + th {
                        width: auto;
                    }
                }
            </style>

            <script>
                // DIRTY Responsive pricing table JS

                $("ul").on("click", "li", function () {
                    var pos = $(this).index() + 2;
                    $("tr").find('td:not(:eq(0))').hide();
                    $('td:nth-child(' + pos + ')').css('display', 'table-cell');
                    $("tr").find('th:not(:eq(0))').hide();
                    $('li').removeClass('active');
                    $(this).addClass('active');
                });

                // Initialize the media query
                var mediaQuery = window.matchMedia('(min-width: 640px)');

                // Add a listen event
                mediaQuery.addListener(doSomething);

                // Function to do something with the media query
                function doSomething(mediaQuery) {
                    if (mediaQuery.matches) {
                        $('.sep').attr('colspan', 5);
                    } else {
                        $('.sep').attr('colspan', 2);
                    }
                }

                // On load
                doSomething(mediaQuery);
            </script>


        </main><!-- #main -->
    </section><!-- #primary -->

<?php
get_footer();