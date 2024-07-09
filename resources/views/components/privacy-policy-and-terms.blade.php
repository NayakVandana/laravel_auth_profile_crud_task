<div x-show="isModel2" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="fixed inset-0  justify-center items-center z-50 h-full" x-effect="
() => {
if (isModel2) {
    document.body.classList.add('overflow-hidden');
} else {
    document.body.classList.remove('overflow-hidden');
}
 }
 " style="display: none;" x-show="isModel2" @click.outside="isModel2 = false" @close.stop="isModel2 = false">
    <div class="bg-gray-900 bg-opacity-50 overflow-y-auto absolute inset-0 h-full">
        <div class="bg-white rounded-lg p-8 sm:max-w-4xl mx-auto my-10">
            <div class="flex items-start justify-between">
                <div class="">
                    <h6 class="font-bebas font-normal text-2xl">Terms of Use and Privacy Policy</h6>                    
                </div>
                <div class="text-slate-500 font-medium">
                    <span @click="isModel2 = !isModel2" class="cursor-pointer"> &#x2715; </span>
                </div>
            </div>
            <hr class="border-b border-[#DCECFF] my-5">
            <div class="text-[#494F62]  ">
                <b class="text-base mt-5">1. USE OF THIS SITE</b>
                <p class="pl-15px  text-sm  pb-4">
                    Welcome to www.binarysphere.com (<b>"Site"</b> or <b>"BinarySphere"</b> or <b>“Website”</b>).
                    This Site is owned and operated by BinarySphere Online Services Private Limited
                    (“<b>Company”</b> or <b>“We”</b> or <b>”Us“</b> or <b>“Our”</b>),
                    having its office at 7- 339, AG- 2, Opposite Hathi Bag, Main Road, Moti Daman, Daman – 396 220,
                    India by the customers and service providers (hereinafter collectively referred to as
                    <b>“User(s)”/ “You”/ “Your”</b>., You may be accessing our Site from a computer or mobile phone device
                    (through an iOS or Android application, for example) and these Terms of Use govern
                    your use of our Site and your conduct, regardless of the means of access.
                    By using the Platform, you confirm that you accept these Terms of Use and that you agree to abide by them.
                </p>
                <p class="pl-15px  text-sm  pb-4">
                    The Site is only to be used for your personal non-commercial use and information.
                    Your use of the services and features of the Site shall be governed by these Terms and
                    Conditions (hereinafter <b>"Terms of Use"</b>) along with the Privacy Policy, as modified and amended from time to time.
                </p>
                <p class="pl-15px  text-sm  pb-4">
                    By mere accessing or using the Site, you are acknowledging, without limitation or qualification,
                    to be bound by these Terms of Use and the Polices, whether you have read the same or not.
                    <b>ACCESSING, BROWSING OR OTHERWISE USING THE SITE INDICATES YOUR UNCONDITIONAL AGREEMENT TO ALL THE
                        TERMS AND CONDITIONS IN THIS AGREEMENT, SO PLEASE READ THIS AGREEMENT CAREFULLY BEFORE PROCEEDING.</b>
                    If you do not agree to any of the terms enumerated in the Terms of Use or the Policies, please do not use
                    the Site. You are responsible to ensure that your access to this Site and material available on or through
                    it are legal in each jurisdiction, in or through which you access or view the site or such material.
                </p>
                <p class="pl-15px  text-sm  pb-4">
                    BinarySphere reserves the unilateral right to change the particulars contained in the Terms of Use or
                    the Policies from time to time and at any time, without notice to its users and in its sole discretion.
                    If BinarySphere decides to change the Terms of Use or Policies, BinarySphere will post the new version of
                    the Terms of Use or the Policies on the Site and update the date specified above. Any change or modification
                    to the Terms of Use and the Policies will be effective immediately from the date of such upload of the Terms
                    of Use and Policies on the Site. Your continued use of the Site following the modifications to the Terms of
                    Use and Policies constitutes your acceptance of the modified Terms of Use and Policies whether or not you have
                    read them. For this reason, you should frequently review these Terms of Use, our Guidelines and Rules and any
                    other applicable policies, including their dates, to understand the terms and conditions that apply to your use
                    of the Site.
                </p>
                <br>
                <b class="text-base mt-5">2. PRIVACY PRACTICES</b>
                <p class="pl-15px  text-sm  pb-4">
                    We understand the importance of safeguarding your personal information and we have formulated a Privacy Policy,
                    to ensure that your personal information is sufficiently protected. Apart from these Terms of Use, the Privacy
                    Policy shall also govern your visit and use of the Site. Your continued use of the Site implies that you have
                    read and accepted the Privacy Policy and agree to be bound by its terms and conditions. You consent to the use
                    of personal information by BinarySphere in accordance with the terms of and purposes set forth in the Privacy
                    Policy, the same may be subject to amendment from time to time at the sole discretion of Binary.
                </p>
                <br>
                <b class="text-base mt-5">3. YOUR ACCOUNT</b>
                <p class="pl-15px  text-sm  pb-4">
                    This Site is directed to be used by adults only. We assume that any minor, if at all, accessing our Site is
                    under the supervision of their guardians. Binary or its associates do not knowingly collect information from
                    minors. You will be responsible for maintaining confidentiality of your account, password, and restricting
                    access to your computer, and you hereby accept responsibility for all activities that occur under your account
                    and password. You acknowledge that the information you provide, in any manner whatsoever, are not confidential
                    or proprietary and does not infringe any rights of a third party in whatsoever nature.
                </p>
                <p class="pl-15px  text-sm  pb-4">
                    If you are accessing, browsing and using the Site on someone else’s behalf; you represent that you have the
                    authority to bind that person to all the terms and conditions herein. In the event that the person refuses
                    to be bound as the principal to the Terms of Use, you agree to accept liability for any harm caused by any
                    wrongful use of the Site resulting from such access or use of the Site in whatsoever nature.
                </p>
                <p class="pl-15px  text-sm  pb-4">
                    If you know or have reasons to believe that the security of your account has been breached, you should contact
                    us immediately at the 'Contact Information' provided below. If we have found a breach or suspected breach of
                    the security of your account, we may require you to change your password, temporarily or permanently block or
                    suspend your account without any liability to Binary.
                </p>
                <p class="pl-15px  text-sm  pb-4">
                    We reserve the right to refuse service and/or terminate accounts without prior notice if these Terms of Use are
                    violated or if we decide, in our sole discretion, that it would be in BinarySphere’s best interests to do so.
                    You are solely responsible for all contents that you upload, post, email or otherwise transmit via the Site.
                    The information provided to us shall be maintained by us in accordance with our Privacy Policy.
                </p>
                <br>
                <b class="text-base mt-5">4. SERVICES INFORMATION</b>
                <p class="pl-15px  text-sm  pb-4">
                    BinarySphere provides a platform to the users to obtain information about the business operation of two web
                    applications - Reputeinfo and Tenalysys. BinarySphere also provides career options within the Company and reflect
                    the same under the option of “Career” on the Website. However, BinarySphere does not guarantee the vacancies for
                    job in the Company all the time. Vacancies as per the requirement of the Company will be reflected on the Website.
                    BinarySphere is not bound for proffering the Job vacancy all the time. Binary attempts to be as accurate as
                    possible regarding all the information provided on the Website.
                </p>
                <p class="pl-15px  text-sm  pb-4">
                    Binary reserves the right to correct, change or update information, errors, inaccuracies or omissions at any time
                    (including after an order has been submitted ) without prior notice.
                </p>
                <br>
                <b class="text-base mt-5">5. INTELLECTUAL PROPERTY RIGHTS</b>
                <p class="pl-15px  text-sm  pb-4">
                    No trademark or service mark license is granted in connection with the materials contained on this Site. Access
                    to this Site does not authorize anyone to use any Marks in any manner. Marks displayed on this Site, whether
                    registered or unregistered of BinarySphere are the intellectual property of the respective owners, and
                    BinarySphere shall not be held liable in any manner whatsoever for any unlawful, unauthorized use of the Marks.
                </p>
                <p class="pl-15px  text-sm  pb-4">
                    Binary expressly and exclusively reserve all the intellectual property rights in all text, programs, products,
                    processes, technology, content, software and other materials, which appear on this Site, including its looks
                    and feel. Consequently, the materials on this Site shall not be copied, reproduced, duplicated, republished,
                    downloaded, posted, transmitted, distributed or modified in whole or in part or in any other form whatsoever,
                    except for your personal, non-commercial use only. No right, title or interest in any downloaded materials or
                    software is transferred to you as a result of any such downloading or copying, reproducing, duplicating,
                    republishing, posting, transmitting, distributing or modifying.
                </p>
                <br>
                <b class="text-base mt-5">6. LIMITED LICENSE</b>
                <p class="pl-15px  text-sm  pb-4">
                    BinarySphere grants you limited, non-exclusive, non-transferable, non-sublicensable license to access, and
                    make personal and non-commercial use of the Site. All rights not expressly granted to you in these Terms of Use,
                    are reserved and retained by the Site and its affiliates. BinarySphere reserves the right, at any time,
                    without notice, and at its sole discretion, to terminate your license to use the Site and to block and
                    prevent your future access the Site.
                </p>
                <br>
                <b class="text-base mt-5">7. REPRESENTATIONS AND WARRANTIES</b>
                <p class="pl-15px  text-sm  pb-4">
                    We make no representations regarding the use of or the result of the use/depiction of the Contents on
                    the Site in terms of their correctness, accuracy, reliability, or otherwise. BinarySphere shall not be
                    liable for any loss suffered in any manner by the user as a result of depending directly or indirectly on
                    the depiction of the Content on this Site.
                </p>
                <p class="pl-15px  text-sm  pb-4">
                    You acknowledge that this Site is provided only on the basis set out in the Terms of Use. Your uninterrupted
                    access or use of this Site on this basis may be prevented by certain factors outside our reasonable control
                    including, without limitation, the unavailability, inoperability or interruption of the internet or other
                    telecommunications services or as a result of any maintenance or other service work carried out on this Site.
                </p>
                <br>
                <b class="text-base mt-5">8. TERMINATION</b>
                <p class="pl-15px  text-sm  pb-4">
                    These Terms of Use are effective unless and until terminated by either you or BinarySphere.
                </p>
                <p class="pl-15px  text-sm  pb-4">
                    You may terminate the Terms of Use at any time, provided that you discontinue any further use of this Site.
                    BinarySphere may terminate the Terms of Use at any time and may do so without notice, and accordingly deny
                    you access to the Site, such termination will be without any liability to the Site.
                </p>
                <p class="pl-15px  text-sm  pb-4">
                    Upon any termination of the Terms of Use by either you or BinarySphere, you must promptly destroy all materials
                    downloaded or otherwise obtained from this Site, as well as all copies of such materials, whether made under
                    the Terms of Use or otherwise.
                </p>
                <br>
                <b class="text-base mt-5">9. INDEMNITY</b>
                <p class="pl-15px  text-sm  pb-4">
                    You agree to defend, indemnify and hold harmless BinarySphere, its employees, directors, officers, agents and their
                    successors and assigns, its holding, subsidiaries, affiliates, partners, or licensors from and against any and all
                    claims, liabilities, damages, losses, costs and expenses, including attorney's fees, caused by or arising out of
                    claims based upon your actions or inactions, which may result in any loss or liability to BinarySphere or any third
                    party including but not limited to breach of any warranties, representations or undertakings or in relation to the
                    non-fulfillment of any of your obligations under the Terms of Use, or arising out of the your violation of any
                    applicable laws, regulations including but not limited to Intellectual Property Rights, payment of statutory dues
                    and taxes, claim of libel, defamation, violation of rights of privacy or publicity, loss of service by other
                    subscribers and infringement of intellectual property or other rights. This clause shall survive the expiry or
                    termination of the Terms of Use.
                </p>
                <br>
                <b class="text-base mt-5">10. GOVERNING LAW AND JURISDICTION</b>
                <p class="pl-15px  text-sm  pb-4">
                    The Terms of Use and the Policies shall be construed in accordance with the applicable laws of India. For
                    proceedings arising therein the Courts at Mumbai shall have exclusive jurisdiction. Any dispute or difference
                    either in interpretation or otherwise, of the Terms of Use and other Policies on the Site, between the parties
                    hereto, shall be referred to an independent arbitrator who will be appointed mutually and his/her decision shall
                    be final and binding on the parties hereto. The above arbitration shall be in accordance with the Arbitration
                    and Conciliation Act, 1996 as amended from time to time. The seat and venue of arbitration shall be held in Mumbai.
                </p>
                <br>
                <b class="text-base mt-5">11. GENERAL</b>
                <p class="pl-15px  text-sm  pb-4">
                    You acknowledge and hereby agree to these Terms and Conditions and that it constitute the complete and exclusive
                    agreement between us concerning your use of the Site, and supersede and govern all prior proposals, agreements,
                    or other communications.
                </p>
                <p class="pl-15px  text-sm  pb-4">
                    We reserve the right, in our sole discretion, to change/ alter/ modify these Terms and Conditions at any time
                    by posting the changes on the Site. Any changes are effective immediately upon posting to the Site.
                    Your continued use of the Site thereafter constitutes your agreement to all such changed Terms and Conditions.
                    We may, with or without prior notice, terminate any of the rights granted by these Terms and Conditions.
                    You shall comply immediately with any termination or other notice, including, as applicable, by ceasing all
                    use of the Site.
                </p>
                <p class="pl-15px  text-sm  pb-4">
                    Nothing contained in these Terms and Conditions shall be construed as creating any agency, partnership,
                    affiliation, joint venture or other form of joint enterprise between us. Our failure to require your
                    performance of any provision hereof shall not affect our full right to require such performance at any
                    time thereafter, nor shall our waiver of a breach of any provision hereof be taken or held to be a waiver
                    of the provision itself. In the event that any provision of these Terms and Conditions shall be unenforceable
                    or invalid under any applicable law or be so held by any applicable arbitral award or court decision, such
                    unenforceability or invalidity shall not render these Terms and Conditions unenforceable or invalid as a whole
                    but these Terms and Conditions shall be modified, to the extent possible, by the adjudicating entity to most
                    fully reflect the original intent of the parties as reflected in the original provision. The headings in the
                    Terms and Conditions are for convenience only and shall not be used in its interpretation.
                </p>
            </div>
            <div class="mt-6">
                <button @click="isModel2 = !isModel2"
                    class="font-bebas text-base sm:text-xl font-normal leading-6 bg-[#008DD2] text-white px-8 rounded tracking-widest py-2 uppercase">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>
