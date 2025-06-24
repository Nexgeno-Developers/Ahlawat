{{-- resources/views/custom_pages/custom_page.blade.php --}}

@extends('frontend.layouts.app')

{{-- Meta Tags --}}
@section('page.title', 'THE DIGITAL PERSONAL DATA PROTECTION ACT, 2023 (NO. 22 OF 2023)')
@section('page.description', 'An Act to provide for the processing of digital personal data in a manner that recognises both the right of individuals to protect their personal data and the need to process such personal data for lawful purposes and for matters connected therewith or incidental thereto.')
@section('page.type', 'Custom Page')
@section('page.publish_time', '2025-02-04')
@section('og.image', asset('images/default-blog-image.jpg'))

@section('page.content')

<!-- Banner Section -->
<div class="blog_details_page_banner">
    <img src="{{ asset('storage/assets/image/banner/digital_personal_data.jpg') }}" alt="Custom Banner Image"
        style="width: 100%; height: auto;" />
</div>

<section class="blog_details_page_breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-7 px0">
                <ul class="d-flex align-items-center breadcrumb gap-md-3 gap-1 list-unstyled">
                    <li>
                        <a href="{{ url(route('index')) }}" class="text-decoration-none">Home</a>
                    </li>


                    <li>THE DIGITAL PERSONAL DATA PROTECTION ACT, 2023 (NO. 22 OF 2023)</li>
                </ul>
            </div>
            <div class="col-md-5 px0">
                <div class="d-flex align-items-center justify-content-md-end gap-2">

                    <p class="d-flex align-items-center gap-2 author w120">
                        <img rel="preload" src="/assets/frontend/images/calender.png" alt="calender" />
                        <span>February 04,2025</span>
                    </p>
                </div>
            </div>
        </div>
</section>

<!-- Content Section -->
<section class="blog_details_page_title_desc pt-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12 px0">
                <h1>THE DIGITAL PERSONAL DATA PROTECTION ACT, 2023 (NO. 22 OF 2023)</h1>
                <p>An Act to provide for the processing of digital personal data in a manner that recognises both the
                    right of individuals to protect their personal data and the need to process such personal data for
                    lawful purposes and for matters connected therewith or incidental thereto.</p>

                <h2>CHAPTER I PRELIMINARY</h2>
                <h2>1. Short title and commencement</h2>
                <ul>
                    <li>(1) This Act may be called the Digital Personal Data Protection Act, 2023.</li>
                    <li>(2) It shall come into force on such date as the Central Government may, by notification in the
                        Official Gazette, appoint and different dates may be appointed for different provisions of this
                        Act and any reference in any such provision to the commencement of this Act shall be construed
                        as a reference to the coming into force of that provision.</li>
                </ul>

                <h2>2. Definitions</h2>
                <ul>
                    <li>In this Act, unless the context otherwise requires, —</li>
                    <ol>
                        <li>“Appellate Tribunal” means the Telecom Disputes Settlement and Appellate Tribunal
                            established under section 14 of the Telecom Regulatory Authority of India Act, 1997;</li>
                        <li>“automated” means any digital process capable of operating automatically in response to
                            instructions given or otherwise for the purpose of processing data;</li>
                        <li>“Board” means the Data Protection Board of India established by the Central Government under
                            section 18;</li>
                        <li>“certain legitimate uses” means the uses referred to in section 7;</li>
                        <li>“Chairperson” means the Chairperson of the Board;</li>
                        <li>“child” means an individual who has not completed the age of eighteen years;</li>
                        <li>“Consent Manager” means a person registered with the Board, who acts as a single point of
                            contact to enable a Data Principal to give, manage, review and withdraw her consent through
                            an accessible, transparent and interoperable platform;</li>
                        <li>“data” means a representation of information, facts, concepts, opinions or instructions in a
                            manner suitable for communication, interpretation or processing by human beings or by
                            automated means;</li>
                        <li>“Data Fiduciary” means any person who alone or in conjunction with other persons determines
                            the purpose and means of processing of personal data;</li>
                        <li>“Data Principal” means the individual to whom the personal data relates and where such
                            individual is—
                            <ul>
                                <li>a child, includes the parents or lawful guardian of such a child;</li>
                                <li>a person with disability, includes her lawful guardian, acting on her behalf;</li>
                            </ul>
                        </li>
                        <li>“Data Processor” means any person who processes personal data on behalf of a Data Fiduciary;
                        </li>
                        <li>“Data Protection Officer” means an individual appointed by the Significant Data Fiduciary
                            under clause (a) of sub-section (2) of section 10;</li>
                        <li>“digital office” means an office that adopts an online mechanism wherein the proceedings,
                            from receipt of intimation or complaint or reference or directions or appeal, as the case
                            may be, to the disposal thereof, are conducted in online or digital mode;</li>
                        <li>“digital personal data” means personal data in digital form;</li>
                        <li>“gain” means—
                            <ul>
                                <li>a gain in property or supply of services, whether temporary or permanent; or</li>
                                <li>an opportunity to earn remuneration or greater remuneration or to gain a financial
                                    advantage otherwise than by way of legitimate remuneration;</li>
                            </ul>
                        </li>
                        <li>“loss” means—
                            <ul>
                                <li>a loss in property or interruption in supply of services, whether temporary or
                                    permanent; or</li>
                                <li>a loss of opportunity to earn remuneration or greater remuneration or to gain a
                                    financial advantage otherwise than by way of legitimate remuneration;</li>
                            </ul>
                        </li>
                        <li>“Member” means a Member of the Board and includes the Chairperson;</li>
                        <li>“notification” means a notification published in the Official Gazette and the expressions
                            “notify” and “notified” shall be construed accordingly;</li>
                        <li>“person” includes—
                            <ul>
                                <li>an individual;</li>
                                <li>a Hindu undivided family;</li>
                                <li>a company;</li>
                                <li>a firm;</li>
                                <li>an association of persons or a body of individuals, whether incorporated or not;
                                </li>
                                <li>the State; and</li>
                                <li>every artificial juristic person, not falling within any of the preceding
                                    sub-clauses;</li>
                            </ul>
                        </li>
                        <li>“personal data” means any data about an individual who is identifiable by or in relation to
                            such data;</li>
                        <li>“personal data breach” means any unauthorised processing of personal data or accidental
                            disclosure, acquisition, sharing, use, alteration, destruction or loss of access to personal
                            data, that compromises the confidentiality, integrity or availability of personal data;</li>
                        <li>“prescribed” means prescribed by rules made under this Act;</li>
                        <li>“proceeding” means any action taken by the Board under the provisions of this Act;</li>
                        <li>“processing” in relation to personal data, means a wholly or partly automated operation or
                            set of operations performed on digital personal data, and includes operations such as
                            collection, recording, organisation, structuring, storage, adaptation, retrieval, use,
                            alignment or combination, indexing, sharing, disclosure by transmission, dissemination or
                            otherwise making available, restriction, erasure or destruction;</li>
                        <li>“she” in relation to an individual includes the reference to such individual irrespective of
                            gender;</li>
                        <li>“Significant Data Fiduciary” means any Data Fiduciary or class of Data Fiduciaries as may be
                            notified by the Central Government under section 10;</li>
                        <li>“specified purpose” means the purpose mentioned in the notice given by the Data Fiduciary to
                            the Data Principal in accordance with the provisions of this Act and the rules made
                            thereunder;</li>
                        <li>“State” means the State as defined under article 12 of the Constitution.</li>
                    </ol>
                </ul>

                <h2>3. Application of Act</h2>
                <ul>
                    <li>Subject to the provisions of this Act, it shall—</li>
                    <ol>
                        <li>apply to the processing of digital personal data within the territory of India where the
                            personal data is collected––
                            <ul>
                                <li>in digital form; or</li>
                                <li>in non-digital form and digitised subsequently;</li>
                            </ul>
                        </li>
                        <li>also apply to processing of digital personal data outside the territory of India, if such
                            processing is in connection with any activity related to offering of goods or services to
                            Data Principals within the territory of India;</li>
                        <li>not apply to—
                            <ul>
                                <li>personal data processed by an individual for any personal or domestic purpose; and
                                </li>
                                <li>personal data that is made or caused to be made publicly available by—
                                    <ul>
                                        <li>the Data Principal to whom such personal data relates; or</li>
                                        <li>any other person who is under an obligation under any law for the time being
                                            in force in India to make such personal data publicly available.</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ol>
                </ul>

                <h2>4. Grounds for processing</h2>
                <p><strong>Illustration:</strong> X, an individual, while blogging her views, has publicly made
                    available her personal data on social media. In such case, the provisions of this Act shall not
                    apply.</p><br>

                <h2>CHAPTER II OBLIGATIONS OF DATA FIDUCIARY</h2>

                <ol>
                    <li>
                        (1) A person may process the personal data of a Data Principal only in accordance with the
                        provisions of this Act and for a lawful purpose,—
                        <ul>
                            <li>a. for which the Data Principal has given her consent; or</li>
                            <li>b. for certain legitimate uses.</li>
                        </ul>
                        (2) For the purposes of this section, the expression “lawful purpose” means any purpose which is
                        not expressly forbidden by law.
                    </li>
                    <li>
                        (1) Every request made to a Data Principal under section 6 for consent shall be accompanied or
                        preceded by a notice given by the Data Fiduciary to the Data Principal, informing her,—
                        <ul>
                            <li>I. the personal data and the purpose for which the same is proposed to be processed;
                            </li>
                            <li>II. the manner in which she may exercise her rights under sub-section (4) of section 6
                                and section 13; and</li>
                            <li>III. the manner in which the Data Principal may make a complaint to the Board, in such
                                manner and as may be prescribed.</li>
                        </ul>
                        Illustration.
                        <p>X, an individual, opens a bank account using the mobile app or website of Y, a bank. To
                            complete the Know-Your-Customer requirements under law for opening of bank account, X opts
                            for processing of her personal data by Y in a live, video-based customer identification
                            process. Y shall accompany or precede the request for the personal data with notice to X,
                            describing the personal data and the purpose of its processing.</p>
                        (2) Where a Data Principal has given her consent for the processing of her personal data before
                        the date of commencement of this Act,—
                        <ul>
                            <li>a. the Data Fiduciary shall, as soon as it is reasonably practicable, give to the Data
                                Principal a notice informing her, ––
                                <ul>
                                    <li>I. the personal data and the purpose for which the same has been processed;</li>
                                    <li>II. the manner in which she may exercise her rights under sub-section (4) of
                                        section 6 and section 13; and</li>
                                    <li>III. the manner in which the Data Principal may make a complaint to the Board,
                                        in such manner and as may be prescribed.</li>
                                </ul>
                            </li>
                            <li>b. the Data Fiduciary may continue to process the personal data until and unless the
                                Data Principal withdraws her consent.</li>
                        </ul>
                        Illustration.
                        <p>X, an individual, gave her consent to the processing of her personal data for an online
                            shopping app or website operated by Y, an e-commerce service provider, before the
                            commencement of this Act. Upon commencement of the Act, Y shall, as soon as practicable,
                            give through email, in-app notification or other effective method information to X,
                            describing the personal data and the purpose of its processing.</p>
                        (3) The Data Fiduciary shall give the Data Principal the option to access the contents of the
                        notice referred to in sub-sections (1) and (2) in English or any language specified in the
                        Eighth Schedule to the Constitution.
                    </li>
                    <li>
                        (1) The consent given by the Data Principal shall be free, specific, informed, unconditional and
                        unambiguous with a clear affirmative action, and shall signify an agreement to the processing of
                        her personal data for the specified purpose and be limited to such personal data as is necessary
                        for such specified purpose.
                        Illustration.
                        <p>X, an individual, downloads Y, a telemedicine app. Y requests the consent of X for (i) the
                            processing of her personal data for making available telemedicine services, and (ii)
                            accessing her mobile phone contact list, and X signifies her consent to both. Since phone
                            contact list is not necessary for making available telemedicine services, her consent shall
                            be limited to the processing of her personal data for making available telemedicine
                            services.</p>
                        (2) Any part of consent referred in sub-section (1) which constitutes an infringement of the
                        provisions of this Act or the rules made thereunder or any other law for the time being in force
                        shall be invalid to the extent of such infringement.
                        Illustration.
                        <p>X, an individual, buys an insurance policy using the mobile app or website of Y, an insurer.
                            She gives to Y her consent for (i) the processing of her personal data by Y for the purpose
                            of issuing the policy, and (ii) waiving her right to file a complaint to the Data Protection
                            Board of India. Part (ii) of the consent, relating to waiver of her right to file a
                            complaint, shall be invalid.</p>
                        (3) Every request for consent under the provisions of this Act or the rules made thereunder
                        shall be presented to the Data Principal in a clear and plain language, giving her the option to
                        access such request in English or any language specified in the Eighth Schedule to the
                        Constitution and providing the contact details of a Data Protection Officer, where applicable,
                        or of any other person authorised by the Data Fiduciary to respond to any communication from the
                        Data Principal for the purpose of exercise of her rights under the provisions of this Act.
                        (4) Where consent given by the Data Principal is the basis of processing of personal data, such
                        Data Principal shall have the right to withdraw her consent at any time, with the ease of doing
                        so being comparable to the ease with which such consent was given.
                        (5) The consequences of the withdrawal referred to in sub-section (4) shall be borne by the Data
                        Principal, and such withdrawal shall not affect the legality of processing of the personal data
                        based on consent before its withdrawal.
                        Illustration.
                        <p>X, an individual, is the user of an online shopping app or website operated by Y, an
                            e-commerce service provider. X consents to the processing of her personal data by Y for the
                            purpose of fulfilling her supply order and places an order for supply of a good while making
                            payment for the same. If X withdraws her consent, Y may stop enabling X to use the app or
                            website for placing orders, but may not stop the processing for supply of the goods already
                            ordered and paid for by X.</p>
                        (6) If a Data Principal withdraws her consent to the processing of personal data under
                        sub-section (5), the Data Fiduciary shall, within a reasonable time, cease and cause its Data
                        Processors to cease processing the personal data of such Data Principal unless such processing
                        without her consent is required or authorised under the provisions of this Act or the rules made
                        thereunder or any other law for the time being in force in India.
                        Illustration.
                        <p>X, a telecom service provider, enters into a contract with Y, a Data Processor, for emailing
                            telephone bills to the customers of X. Z, a customer of X, who had earlier given her consent
                            to X for the processing of her personal data for emailing of bills, downloads the mobile app
                            of X and opts to receive bills only on the app. X shall itself cease, and shall cause Y to
                            cease, the processing of the personal data of Z for emailing bills.</p>
                        (7) The Data Principal may give, manage, review or withdraw her consent to the Data Fiduciary
                        through a Consent Manager.
                        (8) The Consent Manager shall be accountable to the Data Principal and shall act on her behalf
                        in such manner and subject to such obligations as may be prescribed.
                        (9) Every Consent Manager shall be registered with the Board in such manner and subject to such
                        technical, operational, financial and other conditions as may be prescribed.
                        (10) Where a consent given by the Data Principal is the basis of processing of personal data and
                        a question arises in this regard in a proceeding, the Data Fiduciary shall be obliged to prove
                        that a notice was given by her to the Data Principal and consent was given by such Data
                        Principal to the Data Fiduciary in accordance with the provisions of this Act and the rules made
                        thereunder.
                    </li>
                    <li>
                        A Data Fiduciary may process personal data of a Data Principal for any of following uses,
                        namely: —
                        <ul>
                            <li>a. for the specified purpose for which the Data Principal has voluntarily provided her
                                personal data to the Data Fiduciary, and in respect of which she has not indicated to
                                the Data Fiduciary that she does not consent to the use of her personal data.
                                Illustrations.
                                <ul>
                                    <li>(I) X, an individual, makes a purchase at Y, a pharmacy. She voluntarily
                                        provides Y her personal data and requests Y to acknowledge receipt of the
                                        payment made for the purchase by sending a message to her mobile phone. Y may
                                        process the personal data of X for the purpose of sending the receipt.</li>
                                    <li>(II) X, an individual, electronically messages Y, a real estate broker,
                                        requesting Y to help identify a suitable rented accommodation for her and shares
                                        her personal data for this purpose. Y may process her personal data to identify
                                        and intimate to her the details of accommodation available on rent.
                                        Subsequently, X informs Y that X no longer needs help from Y. Y shall cease to
                                        process the personal data of X;</li>
                                    </ ```html </li>
                                    <li>b. for the State and any of its instrumentalities to provide or issue to the
                                        Data Principal such subsidy, benefit, service, certificate, licence or permit as
                                        may be prescribed, where––
                                        <ul>
                                            <li>I. she has previously consented to the processing of her personal data
                                                by the State or any of its instrumentalities for any subsidy, benefit,
                                                service, certificate, licence or permit; or</li>
                                            <li>II. such personal data is available in digital form in, or in
                                                non-digital form and digitised subsequently from, any database,
                                                register, book or other document which is maintained by the State or any
                                                of its instrumentalities and is notified by the Central Government,
                                                subject to standards followed for processing being in accordance with
                                                the policy issued by the Central Government or any law for the time
                                                being in force for governance of personal data.</li>
                                        </ul>
                                        Illustration.
                                        <p>X, a pregnant woman, enrols herself on an app or website to avail of
                                            government’s maternity benefits programme, while consenting to provide her
                                            personal data for the purpose of availing of such benefits. Government may
                                            process the personal data of X processing to determine her eligibility to
                                            receive any other prescribed benefit from the government;</p>
                                    </li>
                                    <li>c. for the performance by the State or any of its instrumentalities of any
                                        function under any law for the time being in force in India or in the interest
                                        of sovereignty and integrity of India or security of the State;</li>
                                    <li>d. for fulfilling any obligation under any law for the time being in force in
                                        India on any person to disclose any information to the State or any of its
                                        instrumentalities, subject to such processing being in accordance with the
                                        provisions regarding disclosure of such information in any other law for the
                                        time being in force;</li>
                                    <li>e. for compliance with any judgment or decree or order issued under any law for
                                        the time being in force in India, or any judgment or order relating to claims of
                                        a contractual or civil nature under any law for the time being in force outside
                                        India;</li>
                                    <li>f. for responding to a medical emergency involving a threat to the life or
                                        immediate threat to the health of the Data Principal or any other individual;
                                    </li>
                                    <li>g. for taking measures to provide medical treatment or health services to any
                                        individual during an epidemic, outbreak of disease, or any other threat to
                                        public health;</li>
                                    <li>h. for taking measures to ensure safety of, or provide assistance or services
                                        to, any individual during any disaster, or any breakdown of public order.
                                        <p>Explanation. — For the purposes of this clause, the expression “disaster”
                                            shall have the same meaning as assigned to it in clause (d) of section 2 of
                                            the Disaster Management Act, 2005; or</p>
                                    </li>
                                    <li>i. for the purposes of employment or those related to safeguarding the employer
                                        from loss or liability, such as prevention of corporate espionage, maintenance
                                        of confidentiality of trade secrets, intellectual property, classified
                                        information or provision of any service or benefit sought by a Data Principal
                                        who is an employee.</li>
                                </ul>
                            </li>
                            <li>
                                (1) A Data Fiduciary shall, irrespective of any agreement to the contrary or failure of
                                a Data Principal to carry out the duties provided under this Act, be responsible for
                                complying with the provisions of this Act and the rules made thereunder in respect of
                                any processing undertaken by it or on its behalf by a Data Processor.
                                (2) A Data Fiduciary may engage, appoint, use or otherwise involve a Data Processor to
                                process personal data on its behalf for any activity related to offering of goods or
                                services to Data Principals only under a valid contract.
                                (3) Where personal data processed by a Data Fiduciary is likely to be—
                                <ul>
                                    <li>a. used to make a decision that affects the Data Principal; or</li>
                                    <li>b. disclosed to another Data Fiduciary,</li>
                                </ul>
                                the Data Fiduciary processing such personal data shall ensure its completeness, accuracy
                                and consistency.
                                (4) A Data Fiduciary shall implement appropriate technical and organisational measures
                                to ensure effective observance of the provisions of this Act and the rules made
                                thereunder.
                                (5) A Data Fiduciary shall protect personal data in its possession or under its control,
                                including in respect of any processing undertaken by it or on its behalf by a Data
                                Processor, by taking reasonable security safeguards to prevent personal data breach.
                                (6) In the event of a personal data breach, the Data Fiduciary shall give the Board and
                                each affected Data Principal, intimation of such breach in such form and manner as may
                                be prescribed.
                                (7) A Data Fiduciary shall, unless retention is necessary for compliance with any law
                                for the time being in force ```html
                                ,—
                                <ul>
                                    <li>a. erase personal data, upon the Data Principal withdrawing her consent or as
                                        soon as it is reasonable to assume that the specified purpose is no longer being
                                        served, whichever is earlier; and</li>
                                    <li>b. cause its Data Processor to erase any personal data that was made available
                                        by the Data Fiduciary for processing to such Data Processor.</li>
                                </ul>
                                Illustrations.
                                <ul>
                                    <li>(I) X, an individual, registers herself on an online marketplace operated by Y,
                                        an e-commerce service provider. X gives her consent to Y for the processing of
                                        her personal data for selling her used car. The online marketplace helps
                                        conclude the sale. Y shall no longer retain her personal data.</li>
                                    <li>(II) X, an individual, decides to close her savings account with Y, a bank. Y is
                                        required by law applicable to banks to maintain the record of the identity of
                                        its clients for a period of ten years beyond closing of accounts. Since
                                        retention is necessary for compliance with law, Y shall retain X’s personal data
                                        for the said period.</li>
                                </ul>
                                (8) The purpose referred to in clause (a) of sub-section (7) shall be deemed to no
                                longer be served, if the Data Principal does not––
                                <ul>
                                    <li>a. approach the Data Fiduciary for the performance of the specified purpose; and
                                    </li>
                                    <li>b. exercise any of her rights in relation to such processing, for such time
                                        period as may be prescribed, and different time periods may be prescribed for
                                        different classes of Data Fiduciaries and for different purposes.</li>
                                </ul>
                                (9) A Data Fiduciary shall publish, in such manner as may be prescribed, the business
                                contact information of a Data Protection Officer, if applicable, or a person who is able
                                to answer on behalf of the Data Fiduciary, the questions, if any, raised by the Data
                                Principal about the processing of her personal data.
                                (10) A Data Fiduciary shall establish an effective mechanism to redress the grievances
                                of Data Principals.
                                (11) For the purposes of this section, it is hereby clarified that a Data Principal
                                shall be considered as not having approached the Data Fiduciary for the performance of
                                the specified purpose, in any period during which she has not initiated contact with the
                                Data Fiduciary for such performance, in person or by way of communication in electronic
                                or physical form.
                            </li>
                            <li>
                                (1) The Data Fiduciary shall, before processing any personal data of a child or a person
                                with disability who has a lawful guardian obtain verifiable consent of the parent of
                                such child or the lawful guardian, as the case may be, in such manner as may be
                                prescribed.
                                Explanation. — For the purpose of this sub-section, the expression “consent of the
                                parent” includes the consent of lawful guardian, wherever applicable.
                                (2) A Data Fiduciary shall not undertake such processing of personal data that is likely
                                to cause any detrimental effect on the well-being of a child.
                                (3) A Data Fiduciary shall not undertake tracking or behavioural monitoring of children
                                or targeted advertising directed at children.
                                (4) The provisions of sub-sections (1) and (3) shall not be applicable to processing of
                                personal data of a child by such classes of Data Fiduciaries or for such purposes, and
                                subject to such conditions, as may be prescribed.
                                (5) The Central Government may, if satisfied that a Data Fiduciary has ensured that its
                                processing of personal data of children is done in a manner that is verifiably safe,
                                notify for such processing by such Data Fiduciary the age above which that Data
                                Fiduciary shall be exempt from the applicability of all or any of the obligations under
                                sub-sections (1) and (3) in respect of processing by that Data Fiduciary as the
                                notification may specify.
                            </li>
                            <li>
                                (1) The Central Government may notify any Data Fiduciary or class of Data Fiduciaries as
                                Significant Data Fiduciary, on the basis of an assessment of such relevant factors as it
                                may determine, including—
                                <ul>
                                    <li>a. the volume and sensitivity of personal data processed;</li>
                                    <li>b. risk to the rights of Data Principal;</li>
                                    <li>c. potential impact on the sovereignty and integrity of India;</li>
                                    <li>d. risk to electoral democracy;</li>
                                    <li>e. security of the State; and</li>
                                    <li>f. public order.</li>
                                </ul>
                                (2) The Significant Data Fiduciary shall—
                                <ul>
                                    <li>a. appoint a Data Protection Officer who shall—
                                        <ul>
                                            <li>I. represent the Significant Data Fiduciary under the provisions of this
                                                Act;</li>
                                            <li>II. be based in India;</li>
                                            <li>III. be an individual responsible to the Board of Directors or similar
                                                governing body of the Significant Data Fiduciary; and</li>
                                            <li>IV. be the point of contact for the grievance redressal mechanism under
                                                the provisions of this Act;</li>
                                        </ul>
                                    </li>
                                    <li>b. appoint an independent data auditor to carry out data audit, who shall
                                        evaluate the compliance of the Significant Data Fiduciary in accordance with the
                                        provisions of this Act; and</li>
                                    <li>c. undertake the following other measures, namely:—
                                        <ul>
                                            <li>• periodic Data Protection Impact Assessment, which shall be a process
                                                comprising a description of the rights of Data Principals and the
                                                purpose of processing of their personal data, assessment and management
                                                of the risk to the rights of the Data Principals, and such other matters
                                                regarding such process as may be prescribed;</li>
                                            <li>• periodic audit; and</li>
                                            <li>• such other measures, consistent with the provisions of this Act, as
                                                may be prescribed.</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                </ol>

                <h2>CHAPTER III</h2>
                <h3>RIGHTS AND DUTIES OF DATA PRINCIPAL</h3>

                <p><strong>11. (1)</strong> The Data Principal shall have the right to obtain from the Data Fiduciary to
                    whom she has previously given consent, including consent as referred to in clause (a) of section 7
                    (hereinafter referred to as the said Data Fiduciary), for processing of personal data, upon making
                    to it a request in such manner as may be prescribed, —</p>
                <ul>
                    <li>a summary of personal data which is being processed by such Data Fiduciary and the processing
                        activities undertaken by that Data Fiduciary with respect to such personal data;</li>
                    <li>the identities of all other Data Fiduciaries and Data Processors with whom the personal data has
                        been shared by such Data Fiduciary, along with a description of the personal data so shared; and
                    </li>
                    <li>any other information related to the personal data of such Data Principal and its processing, as
                        may be prescribed.</li>
                </ul>
                <p><strong>(2)</strong> Nothing contained in clause (b) or clause (c) of sub-section (1) shall apply in
                    respect of the sharing of any personal data by the said Data Fiduciary with any other Data Fiduciary
                    authorised by law to obtain such personal data, where such sharing is pursuant to a request made in
                    writing by such other Data Fiduciary for the purpose of prevention or detection or investigation of
                    offences or cyber incidents, or for prosecution or punishment of offences.</p>

                <p><strong>12. (1)</strong> A Data Principal shall have the right to correction, completion, updating
                    and erasure of her personal data for the processing of which she has previously given consent,
                    including consent as referred to in clause (a) of section 7, in accordance with any requirement or
                    procedure under any law for the time being in force.</p>
                <p><strong>(2)</strong> A Data Fiduciary shall, upon receiving a request for correction, completion or
                    updating from a Data Principal,—</p>
                <ul>
                    <li>correct the inaccurate or misleading personal data;</li>
                    <li>complete the incomplete personal data; and</li>
                    <li>update the personal data.</li>
                </ul>
                <p><strong>(3)</strong> A Data Principal shall make a request in such manner as may be prescribed to the
                    Data Fiduciary for erasure of her personal data, and upon receipt of such a request, the Data
                    Fiduciary shall erase her personal data unless retention of the same is necessary for the specified
                    purpose or for compliance with any law for the time being in force.</p>

                <p><strong>13. (1)</strong> A Data Principal shall have the right to have readily available means of
                    grievance redressal provided by a Data Fiduciary or Consent Manager in respect of any act or
                    omission of such Data Fiduciary or Consent Manager regarding the performance of its obligations in
                    relation to the personal data of such Data Principal or the exercise of her rights under the
                    provisions of this Act and the rules made thereunder.</p>
                <p><strong>(2)</strong> The Data Fiduciary or Consent Manager shall respond to any grievances referred
                    to in sub-section (1) within such period as may be prescribed from the date of its receipt for all
                    or any class of Data Fiduciaries.</p>
                <p><strong>(3)</strong> The Data Principal shall exhaust the opportunity of redressing her grievance
                    under this section before approaching the Board.</p>

                <p><strong>14. (1)</strong> A Data Principal shall have the right to nominate, in such manner as may be
                    prescribed, any other individual, who shall, in the event of death or incapacity of the Data
                    Principal, exercise the rights of the Data Principal in accordance with the provisions of this Act
                    and the rules made thereunder.</p>
                <p><strong>(2)</strong> For the purposes of this section, the expression “incapacity” means inability to
                    exercise the rights of the Data Principal under the provisions of this Act or the rules made
                    thereunder due to unsoundness of mind or infirmity of body.</p>

                <p><strong>15.</strong> A Data Principal shall perform the following duties, namely:—</p>
                <ul>
                    <li>comply with the provisions of all applicable laws for the time being in force while exercising
                        rights under the provisions of this Act;</li>
                    <li>to ensure not to impersonate another person while providing her personal data for a specified
                        purpose;</li>
                    <li>to ensure not to suppress any material information while providing her personal data for any
                        document, unique identifier, proof of identity or proof of address issued by the State or any of
                        its instrumentalities;</li>
                    <li>to ensure not to register a false or frivolous grievance or complaint with a Data Fiduciary or
                        the Board; and</li>
                    <li>to furnish only such information as is verifiably authentic, while exercising the right to
                        correction or erasure under the provisions of this Act or the rules made thereunder.</li>
                </ul>

                <h2>CHAPTER IV</h2>
                <h3>SPECIAL PROVISIONS</h3>

                <p><strong>16. (1)</strong> The Central Government may, by notification, restrict the transfer of
                    personal data by a Data Fiduciary for processing to such country or territory outside India as may
                    be so notified.</p>
                <p><strong>(2)</strong> Nothing contained in this section shall restrict the applicability of any law
                    for the time being in force in India that provides for a higher degree of protection for or
                    restriction on transfer of personal data by a Data Fiduciary outside India in relation to any
                    personal data or Data Fiduciary or class thereof.</p>

                <p><strong>17. (1)</strong> The provisions of Chapter II, except sub-sections (1) and (5) of section 8,
                    and those of Chapter III and section 16 shall not apply where—</p>
                <ul>
                    <li>a. the processing of personal data is necessary for enforcing any legal right or claim;</li>
                    <li>b. the processing of personal data by any court or tribunal or any other body in India which is
                        entrusted by law with the performance of any judicial or quasi-judicial or regulatory or
                        supervisory function, where such processing is necessary for the performance of such function;
                    </li>
                    <li>c. personal data is processed in the interest of prevention, detection, investigation or
                        prosecution of any offence or contravention of any law for the time being in force in India;
                    </li>
                    <li>d. personal data of Data Principals not within the territory of India is processed pursuant to
                        any contract entered into with any person outside the territory of India by any person based in
                        India;</li>
                    <li>e. the processing is necessary for a scheme of compromise or arrangement or merger or
                        amalgamation of two or more companies or a reconstruction by way of demerger or otherwise of a
                        company, or transfer of undertaking of one or more company to another company, or involving
                        division of one or more companies, approved by a court or tribunal or other authority competent
                        to do so by any law for the time being in force; and</li>
                    <li>f. the processing is for the purpose of ascertaining the financial information and assets and
                        liabilities of any person who has defaulted in payment due on account of a loan or advance taken
                        from a financial institution, subject to such processing being in accordance with the provisions
                        regarding disclosure of information or data in any other law for the time being in force.</li>
                </ul>
                <p><strong>Explanation.</strong> — For the purposes of this clause, the expressions “default” and
                    “financial institution” shall have the meanings respectively assigned to them in sub-sections (12)
                    and (14) of section 3 of the Insolvency and Bankruptcy Code, 2016.</p>
                <p><strong>Illustration.</strong> X, an individual, takes a loan from Y, a bank. X defaults in paying
                    her monthly loan repayment instalment on the date on which it falls due. Y may process the personal
                    data of X for ascertaining her financial information and assets and liabilities.</p>

                <p><strong>(2)</strong> The provisions of this Act shall not apply in respect of the processing of
                    personal data—</p>
                <ul>
                    <li>a. by such instrumentality of the State as the Central Government may notify, in the interests
                        of sovereignty and integrity of India, security of the State, friendly relations with foreign
                        States, maintenance of public order or preventing incitement to any cognizable offence relating
                        to any of these, and the processing by the Central Government of any personal data that such
                        instrumentality may furnish to it; and</li>
                    <li>b. necessary for research, archiving or statistical purposes if the personal data is not to be
                        used to take any decision specific to a Data Principal and such processing is carried on in
                        accordance with such standards as may be prescribed.</li>
                </ul>

                <p><strong>(3)</strong> The Central Government may, having regard to the volume and nature of personal
                    data processed, notify certain Data Fiduciaries or class of Data Fiduciaries, including startups, as
                    Data Fiduciaries to whom the provisions of section 5, sub-sections (3) and (7) of section 8 and
                    sections 10 and 11 shall not apply.</p>
                <p><strong>Explanation.</strong> — For the purposes of this sub-section, the term “startup” means a
                    private limited company or a partnership firm or a limited liability partnership incorporated in
                    India, which is eligible to be and is recognised as such in accordance with the criteria and process
                    notified by the department to which matters relating to startups are allocated in the Central
                    Government.</p>

                <p><strong>(4)</strong> In respect of processing by the State or any instrumentality of the State, the
                    provisions of sub-section (7) of section 8 and sub-section (3) of section 12 and, where such
                    processing is for a purpose that does not include making of a decision that affects the Data
                    Principal, sub-section (2) of section 12 shall not apply.</p>

                <p><strong>(5)</strong> The Central Government may, before expiry of five years from the date of
                    commencement of this Act, by notification, declare that any provision of this Act shall not apply to
                    such Data Fiduciary or classes of Data Fiduciaries for such period as may be specified in the
                    notification.</p>


                <h2>CHAPTER V</h2>
                <h2>DATA PROTECTION BOARD OF INDIA</h2>

                <h3>18. (1) Establishment of the Data Protection Board</h3>
                <p>With effect from such date as the Central Government may, by notification, appoint, there shall be
                    established, for the purposes of this Act, a Board to be called the Data Protection Board of India.
                </p>
                <p>(2) The Board shall be a body corporate by the name aforesaid, having perpetual succession and a
                    common seal, with power, subject to the provisions of this Act, to acquire, hold and dispose of
                    property, both movable and immovable, and to contract and shall, by the said name, sue or be sued.
                </p>
                <p>(3) The headquarters of the Board shall be at such place as the Central Government may notify.</p>

                <h3>19. (1) Composition of the Board</h3>
                <p>The Board shall consist of a Chairperson and such number of other Members as the Central Government
                    may notify.</p>
                <p>(2) The Chairperson and other Members shall be appointed by the Central Government in such manner as
                    may be prescribed.</p>
                <p>(3) The Chairperson and other Members shall be a person of ability, integrity and standing who
                    possesses special knowledge or practical experience in the fields of data governance, administration
                    or implementation of laws related to social or consumer protection, dispute resolution, information
                    and communication technology, digital economy, law, regulation or techno-regulation, or in any other
                    field which in the opinion of the Central Government may be useful to the Board, and at least one
                    among them shall be an expert in the field of law.</p>

                <h3>20. (1) Salary and terms of service</h3>
                <p>The salary, allowances and other terms and conditions of service of the Chairperson and other Members
                    shall be such as may be prescribed, and shall not be varied to their disadvantage after their
                    appointment.</p>
                <p>(2) The Chairperson and other Members shall hold office for a term of two years and shall be eligible
                    for re-appointment.</p>

                <h3>21. (1) Disqualification for Appointment</h3>
                <p>A person shall be disqualified for being appointed and continued as the Chairperson or a Member, if
                    she—</p>
                <ul>
                    <li>has been adjudged as an insolvent;</li>
                    <li>has been convicted of an offence, which in the opinion of the Central Government, involves moral
                        turpitude;</li>
                    <li>has become physically or mentally incapable of acting as a Member;</li>
                    <li>has acquired such financial or other interest, as is likely to affect prejudicially her
                        functions as a Member;</li>
                    <li>has so abused her position as to render her continuance in office prejudicial to the public
                        interest.</li>
                </ul>
                <p>(2) The Chairperson or Member shall not be removed from her office by the Central Government unless
                    she has been given an opportunity of being heard in the matter.</p>

                <h3>22. (1) Resignation of Chairperson or Members</h3>
                <p>The Chairperson or any other Member may give notice in writing to the Central Government of resigning
                    from her office, and such resignation shall be effective from the date on which the Central
                    Government permits her to relinquish office, or upon expiry of a period of three months from the
                    date of receipt of such notice, or upon a duly appointed successor entering upon her office, or upon
                    the expiry of the term of her office, whichever is earliest.</p>
                <p>(2) A vacancy caused by the resignation or removal or death of the Chairperson or any other Member,
                    or otherwise, shall be filled by fresh appointment in accordance with the provisions of this Act.
                </p>
                <p>(3) The Chairperson and any other Member shall not, for a period of one year from the date on which
                    they cease to hold such office, except with the previous approval of the Central Government, accept
                    any employment, and shall also disclose to the Central Government any subsequent acceptance of
                    employment with any Data Fiduciary against whom proceedings were initiated by or before such
                    Chairperson or other Member.</p>

                <h3>23. (1) Procedure for Business of the Board</h3>
                <p>The Board shall observe such procedure in regard to the holding of and transaction of business at its
                    meetings, including by digital means, and authenticate its orders, directions and instruments in
                    such manner as may be prescribed.</p>
                <p>(2) No act or proceeding of the Board shall be invalid merely by reason of—</p>
                <ul>
                    <li>any vacancy in or any defect in the constitution of the Board;</li>
                    <li>any defect in the appointment of a person acting as the Chairperson or other Member of the
                        Board;</li>
                    <li>any irregularity in the procedure of the Board, which does not affect the merits of the case.
                    </li>
                </ul>
                <p>(3) When the Chairperson is unable to discharge her functions owing to absence, illness or any other
                    cause, the senior-most Member shall discharge the functions of the Chairperson until the date on
                    which the Chairperson resumes her duties.</p>

                <h3>24. Appointment of Officers and Employees</h3>
                <p>The Board may, with previous approval of the Central Government, appoint such officers and employees
                    as it may deem necessary for the efficient discharge of its functions under the provisions of this
                    Act, on such terms and conditions of appointment and service as may be prescribed.</p>

                <h3>25. Public Servants</h3>
                <p>The Chairperson, Members, officers and employees of the Board shall be deemed, when acting or
                    purporting to act in pursuance of provisions of this Act, to be public servants within the meaning
                    of section 21 of the Indian Penal Code.</p>

                <h3>26. Powers of the Chairperson</h3>
                <p>The Chairperson shall exercise the following powers, namely: —</p>
                <ul>
                    <li>general superintendence and giving direction in respect of all administrative matters of the
                        Board;</li>
                    <li>authorise any officer of the Board to scrutinise any intimation, complaint, reference or
                        correspondence addressed to the Board;</li>
                    <li>authorise performance of any of the functions of the Board and conduct any of its proceedings,
                        by an individual Member or groups of Members and to allocate proceedings among them.</li>
                </ul>
                <h2>CHAPTER VI</h2>
                <h3>POWERS, FUNCTIONS AND PROCEDURE TO BE FOLLOWED BY BOARD</h3>

                <ol>
                    <li>The Board shall exercise and perform the following powers and functions, namely:
                        <ul>
                            <li>on receipt of an intimation of personal data breach under sub-section (6) of section 8,
                                to direct any urgent remedial or mitigation measures in the event of a personal data
                                breach, and to inquire into such personal data breach and impose penalty as provided in
                                this Act;</li>
                            <li>on a complaint made by a Data Principal in respect of a personal data breach or a breach
                                in observance by a Data Fiduciary of its obligations in relation to her personal data or
                                the exercise of her rights under the provisions of this Act, or on a reference made to
                                it by the Central Government or a State Government, or in compliance of the directions
                                of any court, to inquire into such breach and impose penalty as provided in this Act;
                            </li>
                            <li>on a complaint made by a Data Principal in respect of a breach in observance by a
                                Consent Manager of its obligations in relation to her personal data, to inquire into
                                such breach and impose penalty as provided in this Act;</li>
                            <li>on receipt of an intimation of breach of any condition of registration of a Consent
                                Manager, to inquire into such breach and impose penalty as provided in this Act; and
                            </li>
                            <li>on a reference made by the Central Government in respect of the breach in observance of
                                the provisions of sub-section (2) of section 37 by an intermediary, to inquire into such
                                breach and impose penalty as provided in this Act.</li>
                        </ul>
                    </li>

                    <li>The Board may, for the effective discharge of its functions under the provisions of this Act,
                        after giving the person concerned an opportunity of being heard and after recording reasons in
                        writing, issue such directions as it may consider necessary to such person, who shall be bound
                        to comply with the same.</li>

                    <li>The Board may, on a representation made to it by a person affected by a direction issued under
                        sub-section (1) or sub-section (2), or on a reference made by the Central Government, modify,
                        suspend, withdraw or cancel such direction and, while doing so, impose such conditions as it may
                        deem fit, subject to which the modification, suspension, withdrawal or cancellation shall have
                        effect.</li>

                    <li>The Board shall function as an independent body and shall, as far as practicable, function as a
                        digital office, with the receipt of complaints and the allocation, hearing and pronouncement of
                        decisions in respect of the same being digital by design, and adopt such techno-legal measures
                        as may be prescribed.</li>

                    <li>The Board may, on receipt of an intimation or complaint or reference or directions as referred
                        to in sub-section (1) of section 27, take action in accordance with the provisions of this Act
                        and the rules made thereunder.</li>

                    <li>The Board shall determine whether there are sufficient grounds to proceed with an inquiry.</li>

                    <li>In case the Board determines that there are insufficient grounds, it may, for reasons to be
                        recorded in writing, close the proceedings.</li>

                    <li>In case the Board determines that there are sufficient grounds to proceed with inquiry, it may,
                        for reasons to be recorded in writing, inquire into the affairs of any person for ascertaining
                        whether such person is complying with or has complied with the provisions of this Act.</li>

                    <li>The Board shall conduct such inquiry following the principles of natural justice and shall
                        record reasons for its actions during the course of such inquiry.</li>

                    <li>For the purposes of discharging its functions under this Act, the Board shall have the same
                        powers as are vested in a civil court under the Code of Civil Procedure, 1908, in respect of
                        matters relating to:
                        <ul>
                            <li>summoning and enforcing the attendance of any person and examining her on oath;</li>
                            <li>receiving evidence of affidavit requiring the discovery and production of documents;
                            </li>
                            <li>inspecting any data, book, document, register, books of account or any other document;
                                and</li>
                            <li>such other matters as may be prescribed.</li>
                        </ul>
                    </li>

                    <li>The Board or its officers shall not prevent access to any premises or take into custody any
                        equipment or any item that may adversely affect the day-to-day functioning of a person.</li>

                    <li>The Board may require the services of any police officer or any officer of the Central
                        Government or a State Government to assist it for the purposes of this section and it shall be
                        the duty of every such officer to comply with such requisition.</li>

                    <li>During the course of the inquiry, if the Board considers it necessary, it may for reasons to be
                        recorded in writing, issue interim orders after giving the person concerned an opportunity of
                        being heard.</li>

                    <li>On completion of the inquiry and after giving the person concerned an opportunity of being
                        heard, the Board may for reasons to be recorded in writing, either close the proceedings or
                        proceed in accordance with section 33.</li>

                    <li>At any stage after receipt of a complaint, if the Board is of the opinion that the complaint is
                        false or frivolous, it may issue a warning or impose costs on the complainant.</li>
                </ol>

                <h2>CHAPTER VII</h2>
                <h3>APPEAL AND ALTERNATE DISPUTE RESOLUTION</h3>

                <ol>
                    <li>Any person aggrieved by an order or direction made by the Board under this Act may prefer an
                        appeal before the Appellate Tribunal.</li>

                    <li>Every appeal under sub-section (1) shall be filed within a period of sixty days from the date of
                        receipt of the order or direction appealed against and it shall be in such form and manner and
                        shall be accompanied by such fee as may be prescribed.</li>

                    <li>The Appellate Tribunal may entertain an appeal after the expiry of the period specified in
                        sub-section (2), if it is satisfied that there was sufficient cause for not preferring the
                        appeal within that period.</li>

                    <li>On receipt of an appeal under sub-section (1), the Appellate Tribunal may, after giving the
                        parties to the appeal, an opportunity of being heard, pass such orders thereon as it thinks fit,
                        confirming, modifying or setting aside the order appealed against.</li>

                    <li>The Appellate Tribunal shall send a copy of every order made by it to the Board and to the
                        parties to the appeal.</li>

                    <li>The appeal filed before the Appellate Tribunal under sub-section (1) shall be dealt with by it
                        as expeditiously as possible and endeavour shall be made by it to dispose of the appeal finally
                        within six months from the date on which the appeal is presented to it.</li>

                    <li>Where any appeal under sub-section (6) could not be disposed of within the period of six months,
                        the Appellate Tribunal shall record its reasons in writing for not disposing of the appeal
                        within that period.</li>

                    <li>Without prejudice to the provisions of section 14A and section 16 of the Telecom Regulatory
                        Authority of India Act, 1997, the Appellate Tribunal shall deal with an appeal under this
                        section in accordance with such procedure as may be prescribed.</li>

                    <li>Where an appeal is filed against the orders of the Appellate Tribunal under this Act, the
                        provisions of section 18 of the Telecom Regulatory Authority of India Act, 1997 shall apply.
                    </li>

                    <li>In respect of appeals filed under the provisions of this Act, the Appellate Tribunal shall, as
                        far as practicable, function as a digital office, with the receipt of appeal, hearing and
                        pronouncement of decisions in respect of the same being digital by design.</li>

                    <li>An order passed by the Appellate Tribunal under this Act shall be executable by it as a decree
                        of civil court, and for this purpose, the Appellate Tribunal shall have all the powers of a
                        civil court.</li>

                    <li>Notwithstanding anything contained in sub-section (1), the Appellate Tribunal may transmit any
                        order made by it to a civil court having local jurisdiction and such civil court shall execute
                        the order as if it were a decree made by that court.</li>

                    <li>If the Board is of the opinion that any complaint may be resolved by mediation, it may direct
                        the parties concerned to attempt resolution of the dispute through such mediation by such
                        mediator as the parties may mutually agree upon, or as provided for under any law for the time
                        being in force in India.</li>

                    <li>The Board may accept a voluntary undertaking in respect of any matter related to observance of
                        the provisions of this Act from any person at any stage of a proceeding under section 28.</li>

                    <li>The voluntary undertaking referred to in sub-section (1) may include an undertaking to take such
                        action within such time as may be determined by the Board, or refrain from taking such action,
                        and or publicising such undertaking.</li>

                    <li>The Board may, after accepting the voluntary undertaking and with the consent of the person who
                        gave the voluntary undertaking, vary the terms included in the voluntary undertaking.</li>

                    <li>The acceptance of the voluntary undertaking by the Board shall constitute a bar on proceedings
                        under the provisions of this Act as regards the contents of the voluntary undertaking, except in
                        cases covered by sub-section (5).</li>

                    <li>Where a person fails to adhere to any term of the voluntary undertaking accepted by the Board,
                        such breach shall be deemed to be breach of the provisions of this Act and the Board may, after
                        giving such person an opportunity of being heard, proceed in accordance with the provisions of
                        section 33.</li>
                </ol>

                <h2>CHAPTER VIII</h2>
                <h3>PENALTIES AND ADJUDICATION</h3>

                <ol>
                    <li>If the Board determines on conclusion of an inquiry that breach of the provisions of this Act or
                        the rules made thereunder by a person is significant, it may, after giving the person an
                        opportunity of being heard, impose such monetary penalty specified in the Schedule.</li>

                    <li>While determining the amount of monetary penalty to be imposed under sub-section (1), the Board
                        shall have regard to the following matters:
                        <ol>
                            <li>The nature, gravity, and duration of the breach;</li>
                            <li>The type and nature of the personal data affected by the breach;</li>
                            <li>The repetitive nature of the breach;</li>
                            <li>Whether the person, as a result of the breach, has realised a gain or avoided any loss;
                            </li>
                            <li>Whether the person took any action to mitigate the effects and consequences of the
                                breach, and the timeliness and effectiveness of such action;</li>
                            <li>Whether the monetary penalty to be imposed is proportionate and effective, having regard
                                to the need to secure observance of and deter breach of the provisions of this Act;</li>
                            <li>The likely impact of the imposition of the monetary penalty on the person.</li>
                        </ol>
                    </li>

                    <li>All sums realised by way of penalties imposed by the Board under this Act, shall be credited to
                        the Consolidated Fund of India.</li>
                </ol>

                <h2>CHAPTER IX</h2>
                <h3>MISCELLANEOUS</h3>

                <ol>
                    <li>No suit, prosecution or other legal proceedings shall lie against the Central Government, the
                        Board, its Chairperson and any Member, officer or employee thereof for anything which is done or
                        intended to be done in good faith under the provisions of this Act or the rules made thereunder.
                    </li>

                    <li>The Central Government may, for the purposes of this Act, require the Board and any Data
                        Fiduciary or intermediary to furnish such information as it may call for.</li>

                    <li>
                        <strong>Sub-section (1):</strong>
                        The Central Government or any of its officers specially authorised by it in this behalf may,
                        upon receipt of a reference in writing from the Board that:
                        <ol>
                            <li>Intimates the imposition of monetary penalty by the Board on a Data Fiduciary in two or
                                more instances; and</li>
                            <li>Advises, in the interests of the general public, the blocking for access by the public
                                to any information generated, transmitted, received, stored or hosted, in any computer
                                resource that enables such Data Fiduciary to carry on any activity relating to offering
                                goods or services to Data Principals within the territory of India,</li>
                        </ol>
                        After giving an opportunity of being heard to that Data Fiduciary, on being satisfied that it is
                        necessary or expedient so to do, in the interests of the general public, for reasons to be
                        recorded in writing, by order, direct any agency of the Central Government or any intermediary
                        to block for access by the public or cause to be blocked for access by the public any such
                        information.
                    </li>

                    <li>Every intermediary who receives a direction issued under sub-section (1) shall be bound to
                        comply with the same.</li>

                    <li>For the purposes of this section, the expressions “computer resource”, “information” and
                        “intermediary” shall have the meanings respectively assigned to them in the Information
                        Technology Act, 2000.</li>

                    <li>
                        <strong>Sub-section (1):</strong> The provisions of this Act shall be in addition to and not in
                        derogation of any other law for the time being in force.
                    </li>

                    <li>
                        <strong>Sub-section (2):</strong> In the event of any conflict between a provision of this Act
                        and a provision of any other law for the time being in force, the provision of this Act shall
                        prevail to the extent of such conflict.
                    </li>

                    <li>No civil court shall have the jurisdiction to entertain any suit or proceeding in respect of any
                        matter for which the Board is empowered under the provisions of this Act and no injunction shall
                        be granted by any court or other authority in respect of any action taken or to be taken in
                        pursuance of any power under the provisions of this Act.</li>

                    <li>
                        <strong>Sub-section (1):</strong> The Central Government may, by notification, and subject to
                        the condition of previous publication, make rules not inconsistent with the provisions of this
                        Act, to carry out the purposes of this Act.
                    </li>

                    <li>
                        <strong>Sub-section (2):</strong> In particular and without prejudice to the generality of the
                        foregoing power, such rules may provide for all or any of the following matters:
                        <ol>
                            <li>The manner in which the notice given by the Data Fiduciary to a Data Principal shall
                                inform her, under sub-section (1) of section 5;</li>
                            <li>The manner in which the notice given by the Data Fiduciary to a Data Principal shall
                                inform her, under sub-section (2) of section 5;</li>
                            <li>The manner of accountability and the obligations of Consent Manager under sub-section
                                (8) of section 6;</li>
                            <li>The manner of registration of Consent Manager and the conditions relating thereto, under
                                sub-section (9) of section 6;</li>
                            <li>The subsidy, benefit, service, certificate, licence or permit for the provision or
                                issuance of which, personal data may be processed under clause (b) of section 7;</li>
                            <li>The form and manner of intimation of personal data breach to the Board under sub-section
                                (6) of section 8;</li>
                            <li>The time period for the specified purpose to be deemed as no longer being served, under
                                sub-section (8) of section 8;</li>
                            <li>The manner of publishing the business contact information of a Data Protection Officer
                                under sub-section (9) of section 8;</li>
                            <li>The manner of obtaining verifiable consent under sub-section (1) of section 9;</li>
                            <li>The classes of Data Fiduciaries, the purposes of processing of personal data of a child
                                and the conditions relating thereto, under sub-section (4) of section 9;</li>
                            <li>The other matters comprising the process of Data Protection Impact Assessment under
                                sub-clause (i) of clause (c) of sub-section (2) of section 10;</li>
                            <li>The other measures that the Significant Data Fiduciary shall undertake under sub-clause
                                (iii) of clause (c) of sub-section (2) of section 10;</li>
                            <li>The manner in which a Data Principal shall make a request to the Data Fiduciary to
                                obtain information and any other information related to the personal data of such Data
                                Principal and its processing, under sub-section (1) of section 11;</li>
                            <li>The manner in which a Data Principal shall make a request to the Data Fiduciary for
                                erasure of her personal data under sub-section (3) of section 12;</li>
                            <li>The period within which the Data Fiduciary shall respond to any grievances under
                                sub-section (2) of section 13;</li>
                            <li>The manner of nomination of any other individual by the Data Principal under sub-section
                                (1) of section 14;</li>
                            <li>The standards for processing the personal data for exemption under clause (b) of
                                sub-section (2) of section 17;</li>
                            <li>The manner of appointment of the Chairperson and other Members of the Board under
                                sub-section (2) of section 19;</li>
                            <li>The salary, allowances and other terms and conditions of services of the Chairperson and
                                other Members of the Board under sub-section (1) of section 20;</li>
                            <li>The manner of authentication of orders, directions and instruments under sub-section (1)
                                of section 23;</li>
                            <li>The terms and conditions of appointment and service of officers and employees of the
                                Board under section 24;</li>
                            <li>The techno-legal measures to be adopted by the Board under sub-section (1) of section
                                28;</li>
                            <li>The other matters under clause (d) of sub-section (7) of section 28;</li>
                            <li>The form, manner and fee for filing an appeal under sub-section (2) of section 29;</li>
                            <li>The procedure for dealing an appeal under sub-section (8) of section 29;</li>
                            <li>Any other matter which is to be or may be prescribed or in respect of which provision is
                                to be, or may be, made by rules.</li>
                        </ol>
                    </li>

                    <li>Every rule made and every notification issued under section 16 and section 42 of this Act shall
                        be laid, as soon as may be after it is made, before each House of Parliament, while it is in
                        session, for a total period of thirty days which may be comprised in one session or in two or
                        more successive sessions, and if before the expiry of the session immediately following the
                        session or the successive sessions aforesaid, both Houses agree in making any modification in
                        the rule or notification or both Houses agree that the rule or notification should not be made
                        or issued, the rule or notification shall thereafter have effect only in such modified form or
                        be of no effect, as the case may be; so, however, that any such modification or annulment shall
                        be without prejudice to the validity of anything previously done under that rule or
                        notification.</li>

                    <li>
                        <strong>Sub-section (1):</strong> The Central Government may, by notification, amend the
                        Schedule, subject to the restriction that no such notification shall have the effect of
                        increasing any penalty specified therein to more than twice of what was specified in it when
                        this Act was originally enacted.
                    </li>

                    <li>Any amendment notified under sub-section (1) shall have effect as if enacted in this Act and
                        shall come into force on the date of the notification.</li>

                    <li>
                        <strong>Sub-section (1):</strong> If any difficulty arises in giving effect to the provisions of
                        this Act, the Central Government may, by order published in the Official Gazette, make such
                        provisions not inconsistent with the provisions of this Act as may appear to it to be necessary
                        or expedient for removing the difficulty.
                    </li>

                    <li>No order as referred to in sub-section (1) shall be made after the expiry of three years from
                        the date of commencement of this Act.</li>

                    <li>Every order made under this section shall be laid, as soon as may be after it is made, before
                        each House of Parliament.</li>

                    <li>In section 14 of the Telecom Regulatory Authority of India Act, 1997, in clause (c), for
                        sub-clauses (i) and (ii), the following sub-clauses shall be substituted:
                        <ol>
                            <li>“the Appellate Tribunal under the Information Technology Act, 2000;”</li>
                            <li>“the Appellate Tribunal under the Airports Economic Regulatory Authority of India Act,
                                2008;”</li>
                            <li>“the Appellate Tribunal under the Digital Personal Data Protection Act, 2023.”</li>
                        </ol>
                    </li>

                    <li>
                        The Information Technology Act, 2000 shall be amended in the following manner, namely:—
                        <ol>
                            <li>Section 43A shall be omitted;</li>
                            <li>In section 81, in the proviso, after the words and figures “the Patents Act, 1970”,
                                the words and figures “or the Digital Personal Data Protection Act, 2023” shall be
                                inserted;</li>
                            <li>In section 87, in sub-section (2), clause (ob) shall be omitted.</li>
                        </ol>
                    </li>

                    <li>
                        In section 8 of the Right to Information Act, 2005, in sub-section (1), for clause (j), the
                        following clause shall be substituted, namely:—
                        <blockquote>
                            “(j) information which relates to personal information;”.
                        </blockquote>
                    </li>


                </ol>

                <h2>THE SCHEDULE</h2>
                <p>[See section 33 (1)]</p>
                <p><strong>Breach of provisions of this Act or rules made thereunder</strong> (2)</p>

                <ol>
                    <li>
                        Breach in observing the obligation of Data Fiduciary to take reasonable security safeguards to
                        prevent personal data breach under sub-section (5) of section 8.
                        <br><strong>Penalty:</strong> May extend to two hundred and fifty crore rupees.
                    </li>
                    <li>
                        Breach in observing the obligation to give the Board or affected Data Principal notice of a
                        personal data breach under sub-section (6) of section 8.
                        <br><strong>Penalty:</strong> May extend to two hundred and fifty crore rupees.
                    </li>
                    <li>
                        Breach in observance of additional obligations in relation to children under section 9.
                        <br><strong>Penalty:</strong> May extend to two hundred crore rupees.
                    </li>
                    <li>
                        Breach in observance of additional obligations of Significant Data Fiduciary under section 10.
                        <br><strong>Penalty:</strong> May extend to one hundred and fifty crore rupees.
                    </li>
                    <li>
                        Breach in observance of the duties under section 15.
                        <br><strong>Penalty:</strong> May extend to ten thousand rupees.
                    </li>
                    <li>
                        Breach of any term of voluntary undertaking accepted by the Board under section 32.
                        <br><strong>Penalty:</strong> Up to the extent applicable for the breach in respect of which the
                        proceedings under section 28 were instituted.
                    </li>
                    <li>
                        Breach of any other provision of this Act or the rules made thereunder.
                        <br><strong>Penalty:</strong> May extend to fifty crore rupees.
                    </li>
                </ol>

            </div>
        </div>
    </div>
</section>

@endsection

{{-- Custom Styles --}}
<style>
    .blog_details_page_banner img {
        height: auto !important;
    }

    .blog_details_page_banner {
        width: 100% !important;
        height: auto !important;
    }
</style>