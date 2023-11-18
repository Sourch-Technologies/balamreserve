<x-layout>


    <div class="page-heading header-text con">
        <div class="container">
            {{-- <div class="row">
                <div class="col-lg-12">
                    <span class="breadcrumb"><a href="#">Home</a> / Contact Us</span>
                    <h3>Contact Us</h3>
                </div>
            </div> --}}
        </div>
    </div>

    <div class="contact-page section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h6>| Disclaimer</h6>

                    </div>
                    <p style="text-align: justify; line-height: 20px">
                        The preliminary presentation (“Presentation”) has been prepared by the issuer (the
                        “Issuer”), and is being delivered t o the recipient (the “Recipient”) on behalf of the
                        Issuer by Castle Placement, LLC (“Castle Placement™”), our
                        placement agent. This Presentation and the information contained herein is CONFIDENTIAL and
                        shall be kept confidential. By accepting this Presentation, the Recipient agrees it will not
                        copy or distribute this Presentation, in whole or in
                        part, at any time without Issuer’s prior consent. Delivery of this presentation t o anyone
                        other than the Recipient is unauthorized and any reproduction of this preliminary
                        Presentation, in whole or in part, or any attempt t o divulge its
                        contents, in whole or in part, without the prior written consent of the Issuer is
                        prohibited.
                        This Presentation is intended only for Qualified Institutional Investors and individual
                        Accredited Investors as defined by all state and federal securities laws, the Securities Act
                        of 1933 and Rule 501 of Regulation D.
                        Castle Placement™ does not provide legal, investment, accounting, regulatory or tax advice.
                        As such, it should not be used as a substitute for consultation with professional legal,
                        investment, accounting, regulatory, tax, or other competent advisors.
                        This Presentation has been prepared solely for the purpose of providing a preliminary
                        introduction t o the opportunity described in the Presentation t o assist a limited number
                        of parties in deciding whether they wish t o proceed with a
                        further review of this opportunity. Information contained herein has been obtained from
                        management of the Issuer and other sources which are deemed reliable, but no representations
                        or warranties are made by Issuer or the placement agent or
                        any of their respective affiliates, employees or representatives as t o the accuracy or
                        completeness of such information or any other information (whether written or oral) made
                        available in connection with any investigation of Issuer. Neither
                        the placement agent nor Issuer has independently verified any of the information set forth
                        in this Presentation. Only those particular representations and warranties which may be made
                        in a definitive agreement when, as and if it is
                        executed, and subject t o such limitations and restriction as may be specified in the
                        definitive agreement, will have any legal effect.
                        This Presentation does not constitute an offer or solicitation t o sell or purchase any
                        securities. The information contained in this Presentation does not purport t o contain all
                        of the information that a prospective purchaser may desire.
                        In all cases, interested parties should conduct their own investigation and analysis of
                        Issuer and the information contained herein. The information contained in this Presentation
                        is not t o be used for any other purpose. Except as otherwise expressly
                        indicated, this Presentation speaks as of the date hereof. Neither Issuer nor the placement
                        agent undertakes any obligation t o update the information contained herein, correct any
                        inaccuracies that may become apparent or provide the
                        recipient with access t o any additional evaluation material. The delivery of this
                        Presentation does not imply that there has been no change in Issuer’s affairs after the date
                        hereof. This Presentation is not a prospectus, disclosure document or
                        offering document, and does not constitute an offer or invitation t o apply for securities
                        under any law. In particular, this Presentation shall not form the basis of or be relied on
                        in connection with any contract or commitment whatsoever.
                        This Presentation includes certain forward looking statements, estimates and projections
                        provided by the Issuer with respect t o its anticipated future performance. Such statements,
                        estimates and projections reflect various assumptions and
                        judgments by the Issuer concerning anticipated results, which assumptions are inherently
                        uncertain and may or may not prove t o be correct. No representations or warranties are made
                        as to the accuracy of such statements, estimates or
                        projections. Nothing contained herein should be relied on as a promise or representation as
                        t o Issuer’s future performance. In addition t o forward looking statements, this
                        presentation contains information and statistics relating t o Issuer’s industry
                        and related industries. Such information and data was derived from third party and other
                        sources that it believes t o be reliable, but without independent verification.
                        Financial information contained herein has been provided by the Issuer. Neither the Issuer
                        nor Castle Placement™ warrants or guarantees this information, nor makes any representations
                        as t o the accuracy of the information. Recipient
                        must verify this information independently, and represents that it has not relied on the
                        Issuer or Castle Placement™ with respect thereto. Issuer and the placement agent and their
                        respective affiliates, employees and representatives
                        expressly disclaim any and all liability relating t o or resulting from the use of this
                        Presentation or any errors therein or omissions therefrom, or in any other written or oral
                        communication transmitted or made available t o interested
                        parties. Issuer reserves the right t o require the return of this Presentation at any time.
                        Under no circumstances should the Issuer or any of its employees, agents, owners, officers,
                        directors, or members be contacted directly. Issuer reserves
                        the right t o (1) negotiate with one or more prospective buyers at any time and t o enter
                        into a definitive agreement with respect to itself and the Issuer without prior notice t o
                        the recipient or other prospective purchasers, (2) terminate
                        further participation in the investigation and proposal process by any party, and (3) modify
                        the procedures relating t o this process without assigning any reason therefor.
                        This Presentation is not a research report under U.S. law, not a research department product
                        and is intended only for sophisticated investors/clients. Some or all of this Presentation
                        may have been prepared by, and is a product of, a group that may
                        support underwriting, sales, trading or investment banking activities, and Issuer does not
                        hold it out as impartial in relation t o such activities. <br> <br>
                        Private and Confidential
                    </p>
                </div>
                <div class="col-lg-6">
                    <form id="contact-form" action="{{ route('contact-us') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="name">Full Name</label>
                                    <input type="name" name="name" id="name" placeholder="Your Name..."
                                       >
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="email">Email Address</label>
                                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                        placeholder="Your E-mail..." >
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="subject">Subject</label>
                                    <input type="subject" name="subject" id="subject" placeholder="Subject..."
                                       >
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" placeholder="Your Message"></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="orange-button">Send Message</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-12">
                    <div id="map">
                        <iframe
                            src=""
                            width="100%" height="500px" frameborder="0"
                            style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);"
                            allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
