{{-- resources/views/custom_pages/custom_page.blade.php --}}

@extends('frontend.layouts.app')

{{-- Meta Tags --}}
@section('page.title', 'MINISTRY OF ELECTRONICS AND INFORMATION TECHNOLOGY ')
@section('page.description', 'This is a custom page description for SEO purposes.')
@section('page.type', 'Custom Page')
@section('page.publish_time', '2025-02-04')
@section('og.image', asset('images/default-blog-image.jpg'))

@section('page.content')

<!-- Banner Section -->
<div class="blog_details_page_banner">
    <img src="{{ asset('storage/assets/image/banner/ministry.jpg') }}" alt="Custom Banner Image"
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


                    <li>MINISTRY OF ELECTRONICS AND INFORMATION TECHNOLOGY </li>
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
                <h1>MINISTRY OF ELECTRONICS AND INFORMATION TECHNOLOGY NOTIFICATION</h1>
                <p><strong>G.S.R. 02(E).—</strong> Draft of rules proposed to be made by the Central Government in
                    exercise of the powers conferred by sub-sections (1) and (2) of section 40 of the Digital Personal
                    Data Protection Act, 2023 (22 of 2023), on or after the date of coming into force of the Act, are
                    hereby published for the information of all persons likely to be affected thereby; and notice is
                    hereby given that the said draft rules shall be taken into consideration after 18th February, 2025;
                </p>
                <p>Objections and suggestions, if any, may be submitted on the website of MyGov (<a
                        href="https://mygov.in">https://mygov.in</a>) by the said date;</p>
                <p>The objections and suggestions, which may be received from any person with respect to the said draft
                    rules before the expiry of the period specified above, shall not be attributed to the persons
                    submitting publicly and shall be held in fiduciary capacity to enable them to provide the same
                    freely, and shall be considered by the Central Government.</p>

                <h2>DRAFT RULES</h2>

                <h3>1. Short title and commencement</h3>
                <ol>
                    <li>These rules may be called the Digital Personal Data Protection Rules, 2025.</li>
                    <li>Rules 3 to 15, rule 21, and rule 22 shall come into force with effect from ____________.</li>
                    <li>These rules, except rules 3 to 15 and rules 21 and 22, shall come into force on the date of
                        their publication in the Official Gazette.</li>
                </ol>

                <h3>2. Definitions</h3>
                <p>Unless the context otherwise requires, all expressions shall have the meaning assigned to them in the
                    Digital Personal Data Protection Act, 2023 (22 of 2023) (hereinafter referred to as “Act”).</p>

                <h3>3. Notice given by Data Fiduciary to Data Principal</h3>
                <p>The notice given by the Data Fiduciary to the Data Principal shall:</p>
                <ul>
                    <li>be presented and be understandable independently of any other information that has been, is, or
                        may be made available by such Data Fiduciary;</li>
                    <li>give, in clear and plain language, a fair account of the details necessary to enable the Data
                        Principal to give specific and informed consent for the processing of her personal data, which
                        shall include, at the minimum:</li>
                    <ul>
                        <li>An itemised description of such personal data;</li>
                        <li>The specified purpose of, and an itemised description of the goods or services to be
                            provided or uses to be enabled by, such processing;</li>
                    </ul>
                    <li>the particular communication link for accessing the website or app, or both, of such Data
                        Fiduciary, and a description of other means, if any, using which such Data Principal may:</li>
                    <ul>
                        <li>Withdraw her consent, with the ease of doing so being comparable to that with which such
                            consent was given;</li>
                        <li>Exercise her rights under the Act;</li>
                        <li>Make a complaint to the Board.</li>
                    </ul>
                </ul>

                <h3>4. Registration and obligations of Consent Manager</h3>
                <ol>
                    <li>A person who fulfils the conditions for registration of Consent Managers set out in Part A of
                        First Schedule may apply to the Board for registration as a Consent Manager by furnishing such
                        particulars and such other information and documents as the Board may publish in this behalf on
                        its website.</li>
                    <li>On receipt of such application, the Board may make such inquiry as it may deem fit to satisfy
                        itself regarding fulfilment of the conditions set out in Part A of First Schedule, and if it:
                    </li>
                    <ul>
                        <li>is satisfied, register the applicant as a Consent Manager, under intimation to the
                            applicant, and publish on its website the particulars of such Consent Manager; or</li>
                        <li>is not satisfied, reject the application and communicate the reasons for the rejection to
                            the applicant.</li>
                    </ul>
                    <li>The Consent Manager shall have obligations as specified in Part B of First Schedule.</li>
                    <li>If the Board is of the opinion that a Consent Manager is not adhering to the conditions and
                        obligations under this rule, it may, after giving an opportunity of being heard, inform the
                        Consent Manager of such non-adherence and direct the Consent Manager to take measures to ensure
                        adherence.</li>
                    <li>The Board may, if it is satisfied that it is necessary so to do in the interests of Data
                        Principals, after giving the Consent Manager an opportunity of being heard, by order, for
                        reasons to be recorded in writing:</li>
                    <ul>
                        <li>suspend or cancel the registration of such Consent Manager; and</li>
                        <li>give such directions as it may deem fit to that Consent Manager, to protect the interests of
                            the Data Principals.</li>
                    </ul>
                    <li>The Board may, for the purposes of this rule, require the Consent Manager to furnish such
                        information as the Board may call for.</li>
                </ol>

                <h3>5. Processing for provision or issue of subsidy, benefit, service, certificate, licence or permit by
                    State and its instrumentalities</h3>
                <ol>
                    <li>The State and any of its instrumentalities may process the personal data of a Data Principal
                        under clause (b) of section 7 of the Act to provide or to issue to her any subsidy, benefit,
                        service, certificate, licence or permit that is provided or issued under law or policy or using
                        public funds.</li>
                    <li>Processing under this rule shall be done following the standards specified in the Second
                        Schedule.</li>
                    <li>In this rule and Second Schedule, the reference to any subsidy, benefit, service, certificate,
                        licence or permit that is provided or issued—
                        <ul>
                            <li>a) under law shall be construed as a reference to provision or issuance of such subsidy,
                                benefit, service, certificate, licence or permit in exercise of any power of or the
                                performance of any function by the State or any of its instrumentalities under any law
                                for the time being in force;</li>
                            <li>b) under policy shall be construed as a reference to provision or issuance of such
                                subsidy, benefit, service, certificate, licence or permit under any policy or
                                instruction issued by the Central Government or a State Government in exercise of its
                                executive power;</li>
                            <li>c) using public funds shall be construed as a reference to provision or issuance of such
                                subsidy, benefit, service, certificate, licence or permit by incurring expenditure on
                                the same from, or with accrual of receipts to—
                                <ul>
                                    <li>I. in case of the Central Government or a State Government, the Consolidated
                                        Fund of India or the Consolidated Fund of the State or the public account of
                                        India or the public account of the State; or</li>
                                    <li>II. in case of any local or other authority within the territory of India or
                                        under the control of the Government of India or of any State, the fund or funds
                                        of such authority.</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ol>
                <h3>6.Reasonable security safeguards.—</h3>

                <ol>
                    <li>A Data Fiduciary shall protect personal data in its possession or under its control,
                        including in respect of any processing undertaken by it or on its behalf by a Data
                        Processor, by taking reasonable security safeguards to prevent personal data breach,
                        which shall include, at the minimum,—
                        <ul>
                            <li>a) appropriate data security measures, including securing of such personal data
                                through its encryption, obfuscation or masking or the use of virtual tokens
                                mapped to that personal data;</li>
                            <li>b) appropriate measures to control access to the computer resources used by such
                                Data Fiduciary or such a Data Processor;</li>
                            <li>c) visibility on the accessing of such personal data, through appropriate logs,
                                monitoring and review, for enabling detection of unauthorised access, its
                                investigation and remediation to prevent recurrence;</li>
                            <li>d) reasonable measures for continued processing in the event of confidentiality,
                                integrity or availability of such personal data being compromised as a result of
                                destruction or loss of access to personal data or otherwise, including by way of
                                data- backups;</li>
                            <li>e) for enabling the detection of unauthorised access, its investigation,
                                remediation to prevent recurrence and continued processing in the event of such
                                a compromise, retain such logs and personal data for a period of one year,
                                unless compliance with any law for the time being in force requires otherwise;
                            </li>
                            <li>f) appropriate provision in the contract entered into between such Data
                                Fiduciary and such a Data Processor for taking reasonable security safeguards;
                            </li>
                            <li>g) appropriate technical and organisational measures to ensure effective
                                observance of security safeguards.</li>
                        </ul>
                    </li>
                    <li>In this rule, the expression “computer resource” shall have the same meaning as is
                        assigned to it in Information Technology Act, 2000 (21 of 2000).</li>
                </ol>

                <h3>7.Intimation of personal data breach.—</h3>

                <ol>
                    <li>On becoming aware of any personal data breach, the Data Fiduciary shall, to the best of
                        its knowledge, intimate to each affected Data Principal, in a concise, clear and plain
                        manner and without delay, through her user account or any mode of communication
                        registered by her with the Data Fiduciary,—
                        <ul>
                            <li>a) a description of the breach, including its nature, extent and the timing and
                                location of its occurrence;</li>
                            <li>b) the consequences relevant to her, that are likely to arise from the breach;
                            </li>
                            <li>c) the measures implemented and being implemented by the Data Fiduciary, if any,
                                to mitigate risk;</li>
                            <li>d) the safety measures that she may take to protect her interests;</li>
                            <li>e) business contact information of a person who is able to respond on behalf of
                                the Data Fiduciary, to queries, if any, of the Data Principal.</li>
                        </ul>
                    </li>
                    <li>On becoming aware of any personal data breach, the Data Fiduciary shall intimate to the
                        Board,—
                        <ul>
                            <li>a) without delay, a description of the breach, including its nature, extent,
                                timing and location of occurrence and the likely impact;</li>
                            <li>b) within seventy-two hours of becoming aware of the same, or within such longer
                                period as the Board may allow on a request made in writing in this behalf,—
                                <ul>
                                    <li>I. updated and detailed information in respect of such description;</li>
                                    <li>II. the broad facts related to the events, circumstances and reasons
                                        leading to the breach;</li>
                                    <li>III. measures implemented or proposed, if any, to mitigate risk;</li>
                                    <li>IV. any findings regarding the person who caused the breach;</li>
                                    <li>V. remedial measures taken to prevent recurrence of such breach;</li>
                                    <li>VI. a report regarding the intimations given to affected Data
                                        Principals.</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>In this rule, “user account” means the online account registered by the Data Principal
                        with the Data Fiduciary, and includes any profiles, pages, handles, email address,
                        mobile number and other similar presences by means of which such Data Principal is able
                        to access the services of such Data Fiduciary.</li>
                </ol>

                <h3>8.Time period for specified purpose to be deemed as no longer being served.—</h3>

                <ol>
                    <li>A Data Fiduciary, who is of such class and is processing personal data for such
                        corresponding purposes as are specified in Third Schedule, shall erase such personal
                        data, unless its retention is necessary for compliance with any law for the time being
                        in force, if, for the corresponding time period specified in the said Schedule, the Data
                        Principal neither approaches such Data Fiduciary for the performance of the specified
                        purpose nor exercises her rights in relation to such processing.</li>
                    <li>At least forty-eight hours before completion of the time period for erasure of personal data
                        under this rule, the Data Fiduciary shall inform the Data Principal that such personal data
                        shall be erased upon completion of such period, unless she logs into her user account or
                        otherwise initiates contact with the Data Fiduciary for the performance of the specified purpose
                        or exercises her rights in relation to the processing of such personal data.</li>
                    <li>In this rule, “user account” means the online account registered by the Data Principal with the
                        Data Fiduciary, and includes any profiles, pages, handles, email address, mobile number and
                        other similar presences by means of which she is able to access the services of such Data
                        Fiduciary.</li>
                </ol>

                <h3>9.Contact information of person to answer questions about processing.</h3>
                <p>Every Data Fiduciary shall prominently publish on its website or app, and mention in every response
                    to a communication for the exercise of the rights of a Data Principal under the Act, the business
                    contact information of the Data Protection Officer, if applicable, or a person who is able to answer
                    on behalf of the Data Fiduciary the questions of the Data Principal about the processing of her
                    personal data.</p>

                <h3>10.Verifiable consent for processing of personal data of child or of person with disability who has
                    lawful guardian.</h3>
                <ol>
                    <li>
                        <p>A Data Fiduciary shall adopt appropriate technical and organisational measures to ensure that
                            verifiable consent of the parent is obtained before the processing of any personal data of a
                            child and shall observe due diligence, for checking that the individual identifying herself
                            as the parent is an adult who is identifiable if required in connection with compliance with
                            any law for the time being in force in India, by reference to—</p>
                        <ul>
                            <li>a. reliable details of identity and age available with the Data Fiduciary; or</li>
                            <li>b. voluntarily provided details of identity and age or a virtual token mapped to the
                                same, which is issued by an entity entrusted by law or the Central Government or a State
                                Government with the maintenance of such details or a person appointed or permitted by
                                such entity for such issuance, and includes such details or token verified and made
                                available by a Digital Locker service provider.</li>
                        </ul>
                    </li>
                </ol>

                <h5>Illustration</h5>

                <p>C is a child, P is her parent, and DF is a Data Fiduciary. A user account of C is sought to be
                    created on the online platform of DF, by processing the personal data of C.</p>

                <ul>
                    <li><strong>Case 1:</strong> C informs DF that she is a child. DF shall enable C’s parent to
                        identify herself through its website, app, or other appropriate means. P identifies herself as
                        the parent and informs DF that she is a registered user on DF’s platform and has previously made
                        available her identity and age details to DF. Before processing C’s personal data for the
                        creation of her user account, DF shall check to confirm that it holds reliable identity and age
                        details of P.</li>
                    <li><strong>Case 2:</strong> C informs DF that she is a child. DF shall enable C’s parent to
                        identify herself through its website, app, or other appropriate means. P identifies herself as
                        the parent and informs DF that she herself is not a registered user on DF’s platform. Before
                        processing C’s personal data for the creation of her user account, DF shall, by reference to
                        identity and age details issued by an entity entrusted by law or the Government with maintenance
                        of the said details or to a virtual token mapped to the same, check that P is an identifiable
                        adult. P may voluntarily make such details available using the services of a Digital Locker
                        service provider.</li>
                    <li><strong>Case 3:</strong> P identifies herself as C’s parent and informs DF that she is a
                        registered user on DF’s platform and has previously made available her identity and age details
                        to DF. Before processing C’s personal data for the creation of her user account, DF shall check
                        to confirm that it holds reliable identity and age details of P.</li>
                    <li><strong>Case 4:</strong> P identifies herself as C’s parent and informs DF that she herself is
                        not a registered user on DF’s platform. Before processing C’s personal data for the creation of
                        her user account, DF shall, by reference to identity and age details issued by an entity
                        entrusted by law or the Government with maintenance of the said details or to a virtual token
                        mapped to the same, check that P is an identifiable adult. P may voluntarily make such details
                        available using the services of a Digital Locker service provider.</li>
                </ul>

                <p>(2) A Data Fiduciary, while obtaining verifiable consent from an individual identifying herself as
                    the lawful guardian of a person with disability, shall observe due diligence to verify that such
                    guardian is appointed by a court of law, a designated authority, or a local level committee, under
                    the law applicable to guardianship.</p>

                <p>(3) In this rule, the expression—</p>
                <ul>
                    <li><strong>“adult”</strong> shall mean an individual who has completed the age of eighteen years;
                    </li>
                    <li><strong>“Digital Locker service provider”</strong> shall mean such intermediary, including a
                        body corporate or an agency of the appropriate Government, as may be notified by the Central
                        Government, in accordance with the rules made in this regard under the Information Technology
                        Act, 2000 (21 of 2000);</li>
                    <li><strong>“designated authority”</strong> shall mean an authority designated under section 15 of
                        the Rights of Persons with Disabilities Act, 2016 (49 of 2016) to support persons with
                        disabilities in the exercise of their legal capacity;</li>
                    <li><strong>“law applicable to guardianship”</strong> shall mean,—
                        <ul>
                            <li>I. In relation to an individual who has long-term physical, mental, intellectual, or
                                sensory impairment which, in interaction with barriers, hinders her full and effective
                                participation in society equally with others and who, despite being provided adequate
                                and appropriate support, is unable to take legally binding decisions, the provisions of
                                law contained in Rights of Persons with Disabilities Act, 2016 (49 of 2016) and the
                                rules made thereunder; and</li>
                            <li>II. In relation to a person who is suffering from any of the conditions relating to
                                autism, cerebral palsy, mental retardation, or a combination of such conditions and
                                includes a person suffering from severe multiple disabilities, the provisions of law of
                                the National Trust for the Welfare of Persons with Autism, Cerebral Palsy, Mental
                                Retardation, and Multiple Disabilities Act, 1999 (44 of 1999) and the rules made
                                thereunder;</li>
                        </ul>
                    </li>
                    <li><strong>“local level committee”</strong> shall mean a local level committee constituted under
                        section 13 of the National Trust for the Welfare of Persons with Autism, Cerebral Palsy, Mental
                        Retardation, and Multiple Disabilities Act, 1999 (44 of 1999);</li>
                    <li><strong>“person with disability”</strong> shall mean and include—
                        <ul>
                            <li>I. An individual who has long-term physical, mental, intellectual, or sensory impairment
                                which, in interaction with barriers, hinders her full and effective participation in
                                society equally with others and who, despite being provided adequate and appropriate
                                support, is unable to take legally binding decisions; and</li>
                            <li>II. An individual who is suffering from any of the conditions relating to autism,
                                cerebral palsy, mental retardation, or a combination of any two or more of such
                                conditions and includes an individual suffering from severe multiple disability.</li>
                        </ul>
                    </li>
                </ul>

                <h3>11.Exemptions from certain obligations applicable to processing of personal data of child. —</h3>
                <ol>
                    <li>) The provisions of sub-sections (1) and (3) of section 9 of the Act shall not be applicable to
                        processing of personal data of a child by such class of Data Fiduciaries as are specified in
                        Part A of Fourth Schedule, subject to such conditions as are specified in the said Part.</li>
                    <li>) The provisions of sub-sections (1) and (3) of section 9 of the Act shall not be applicable to
                        processing of personal data of a child for such purposes as are specified in Part B of Fourth
                        Schedule, subject to such conditions as are specified in the said Part.</li>
                </ol>
                <h3>12.Additional obligations of Significant Data Fiduciary. —</h3>
                <ol>
                    <li>A Significant Data Fiduciary shall, once in every period of twelve months from the date on which
                        it is notified as such or is included in the class of Data Fiduciaries notified as such,
                        undertake a Data Protection Impact Assessment and an audit to ensure effective observance of the
                        provisions of this Act and the rules made thereunder.</li>
                    <li>A Significant Data Fiduciary shall cause the person carrying out the Data Protection Impact
                        Assessment and audit to furnish to the Board a report containing significant observations in the
                        Data Protection Impact Assessment and audit.</li>
                    <li>A Significant Data Fiduciary shall observe due diligence to verify that algorithmic software
                        deployed by it for hosting, display, uploading, modification, publishing, transmission, storage,
                        updating or sharing of personal data processed by it are not likely to pose a risk to the rights
                        of Data Principals.</li>
                    <li>A Significant Data Fiduciary shall undertake measures to ensure that personal data specified by
                        the Central Government on the basis of the recommendations of a committee constituted by it is
                        processed subject to the restriction that the personal data and the traffic data pertaining to
                        its flow is not transferred outside the territory of India.</li>
                </ol>
                <h3>13.Rights of Data Principals. — </h3>
                <ol>
                    <li>
                        <p>For enabling Data Principals to exercise their rights under the Act, the Data Fiduciary and,
                            where applicable, the Consent Manager, shall publish on its website or app, or both, as the
                            case may be, —</p>
                        <ul>
                            <li>(a) the details of the means using which a Data Principal may make a request for the
                                exercise of such rights; and</li>
                            <li>(b) the particulars, if any, such as the username or other identifier of such a Data
                                Principal, which may be required to identify her under its terms of service.</li>
                        </ul>
                    </li>
                    <li>To exercise the rights of the Data Principal under the Act to access information about personal
                        data and its erasure, she may make a request to the Data Fiduciary to whom she has previously
                        given consent for processing of her personal data, using the means and furnishing the
                        particulars published by such Data Fiduciary for the exercise of such rights.</li>
                    <li>Every Data Fiduciary and Consent Manager shall publish on its website or app, or both, as the
                        case may be, the period under its grievance redressal system for responding to the grievances of
                        Data Principals and shall, for ensuring the effectiveness of the system in responding within
                        such period, implement appropriate technical and organisational measures.</li>
                    <li>To exercise the rights of the Data Principal under the Act to nominate, she may, in accordance
                        with the terms of service of the Data Fiduciary and such law as may be applicable, nominate one
                        or more individuals, using the means and furnishing the particulars published by such Data
                        Fiduciary for the exercise of such right.</li>
                    <li>In this rule, the expression “identifier” shall mean any sequence of characters issued by the
                        Data Fiduciary to identify the Data Principal and includes a customer identification file
                        number, customer acquisition form number, application reference number, enrolment ID or licence
                        number that enables such identification.</li>
                </ol>
                <h3>14.Processing of personal data outside India.</h3>
                <strong>Transfer to any country or territory outside India of personal data processed by a Data
                    Fiduciary—</strong>
                <ol>
                    <li>within the territory of India; or</li>
                    <li>outside the territory of India in connection with any activity related to offering of goods or
                        services to Data Principals within the territory of India,</li>
                    <strong>is subject to the restriction that the Data Fiduciary shall meet such requirements as the
                        Central Government may, by general or special order, specify in respect of making such personal
                        data available to any foreign State, or to any person or entity under the control of or any
                        agency of such a State.</strong>
                </ol>
                <h3>15.Exemption from Act for research, archiving or statistical purposes</h3>
                <ol>
                    <li>The provisions of the Act shall not apply to the processing of personal data necessary for
                        research, archiving or statistical purposes if it is carried on in accordance with the standards
                        specified in Second Schedule.</li>

                </ol>
                <h3>16.Appointment of Chairperson and other Members</h3>
                <ol>
                    <li>The Central Government shall constitute a Search-cum-Selection Committee, with the Cabinet
                        Secretary as the chairperson and the Secretaries to the Government of India in charge of the
                        Department of Legal Affairs and the Ministry of Electronics and Information Technology and two
                        experts of repute having special knowledge or practical experience in a field which in the
                        opinion of the Central Government may be useful to the Board as members, to recommend
                        individuals for appointment as Chairperson.</li>
                    <li>The Central Government shall constitute a Search-cum-Selection Committee, with the Secretary to
                        the Government of India in the Ministry of Electronics and Information Technology as the
                        chairperson and the Secretary to the Government of India in charge of the Department of Legal
                        Affairs, and two experts of repute having special knowledge or practical experience in a field
                        which in the opinion of the Central Government may be useful to the Board as members, to
                        recommend individuals for appointment as a Member other than the Chairperson.</li>
                    <li>The Central Government shall, after considering the suitability of individuals recommended by
                        the Search-cum-Selection Committee, appoint the Chairperson or other Member, as the case may be.
                    </li>
                    <li>No act or proceeding of the Search-cum-Selection Committee specified in sub-rules --(1)
                        of this rule shall be called in question on the ground merely of the existence of any vacancy or
                        absences in such committee or defect in its constitution.
                    </li>
                </ol>
                <h3>17.Salary, allowances and other terms and conditions of service of Chairperson and other Members
                </h3>
                <ol>
                    <li>The Chairperson and every other Member shall receive such salary and allowances and shall have
                        such other terms and conditions of service as are specified in Fifth Schedule.</li>

                </ol>
                <h3>18.Procedure for meetings of Board and authentication of its orders, directions and instruments</h3>
                <ol>
                    <li>The Chairperson shall fix the date, time and place of meetings of the Board, approve the items
                        of agenda therefor, and cause notice specifying the same to be issued under her signature or
                        that of such other individual as the Chairperson may authorise by general or special order in
                        writing.</li>
                    <li>Meetings of the Board shall be chaired by the Chairperson and, in her absence, by such other
                        Member as the Members present at the meeting may choose from amongst themselves.</li>
                    <li>One-third of the membership of the Board shall be the quorum for its meetings.</li>
                    <li>All questions which come up before any meeting of the Board shall be decided by a majority of
                        the votes of Members present and voting, and, in the event of an equality of votes, the
                        Chairperson, or in her absence, the person chairing, shall have a second or casting vote.</li>
                    <li>If a Member has an interest in any item of business to be transacted at a meeting of the Board,
                        she shall not participate in or vote on the same and, in such a case, the decision on such item
                        shall be taken by a majority of the votes of other Members present and voting.</li>
                    <li>In case an emergent situation warrants immediate action by the Board and it is not feasible to
                        call a meeting of the Board, the Chairperson may, while recording the reasons in writing, take
                        such action as may be necessary, which shall be communicated within seven days to all Members
                        and laid before the Board for ratification at its next meeting.</li>
                    <li>If the Chairperson so directs, an item of business or issue which requires decision of the Board
                        may be referred to Members by circulation and such item may be decided with the approval of
                        majority of the Members.</li>
                    <li>The Chairperson or any Member of the Board, or any individual authorised by it by a general or
                        special order in writing, may, under her signature, authenticate its order, direction or
                        instrument.</li>
                    <li>The inquiry by the Board shall be completed within a period of six months from the date of
                        receipt of the intimation, complaint, reference or direction under section 27 of the Act, unless
                        such period is extended by it, for reasons to be recorded in writing, for a further period not
                        exceeding three months at a time.</li>
                </ol>
                <h3>19.Functioning of Board as digital office</h3>
                <ol>
                    <li>The Board shall function as a digital office which, without prejudice to its power to summon and
                        enforce the attendance of any person and examine her on oath, may adopt techno-legal measures to
                        conduct proceedings in a manner that does not require physical presence of any individual.</li>

                </ol>
                <h3>20.Terms and conditions of appointment and service of officers and employees of Board.</h3>
                <ol>
                    <li>The Board may, with previous approval of the Central Government and in such manner as the
                        Central Government may by general or special order specify, appoint such officers and employees
                        as it may deem necessary for the efficient discharge of its functions under the provisions of
                        the Act.</li>
                    <li>The terms and conditions of service of officers and employees of the Board shall be such as are
                        specified in Sixth Schedule.</li>
                </ol>
                <h3>21.Appeal to Appellate Tribunal</h3>
                <ol>
                    <li>An appeal, including any related documents, by a person aggrieved by an order or direction of
                        the Board, shall be filed in digital form, following such procedure as may be specified by the
                        Appellate Tribunal on its website</li>
                    <li>An appeal filed with the Appellate Tribunal shall be accompanied by fee of like amount as is
                        applicable in respect of an appeal filed under the Telecom Regulatory Authority of India Act,
                        1997 (24 of 1997), unless reduced or waived by the Chairperson of the Appellate Tribunal at her
                        discretion, and the same shall be payable digitally using the Unified Payments Interface or such
                        other payment system authorised by the Reserve Bank of India as the Appellate Tribunal may
                        specify on its website.</li>
                    <li><strong>The Appellate Tribunal</strong>
                        <ul>
                            <li>shall not be bound by the procedure laid down by the Code of Civil Procedure, 1908 (5 of
                                1908), but shall be guided by the principles of natural justice and, subject to the
                                provisions of the Act, may regulate its own procedure; and</li>
                            <li>shall function as a digital office which, without prejudice to its power to summon and
                                enforce the attendance of any person and examine her on oath, may adopt techno- legal
                                measures to conduct proceedings in a manner that does not require physical presence of
                                any individual.</li>
                        </ul>
                    </li>
                </ol>
                <h3>22.Calling for information from Data Fiduciary or intermediary.</h3>
                <ol>
                    <li>The Central Government may, for such purposes of the Act as are specified in Seventh Schedule,
                        acting through the corresponding authorised person specified in the said Schedule, require any
                        Data Fiduciary or intermediary to furnish such information as may be called for, specify the
                        time period within which the same shall be furnished and, where disclosure in this regard is
                        likely to prejudicially affect the sovereignty and integrity of India or security of the State,
                        require the Data Fiduciary or intermediary to not disclose the same except with the previous
                        permission in writing of the authorised person.</li>
                    <li>Provision of information called for under this rule shall be by way of fulfilment of obligation
                        under section 36 of the Act.</li>
                </ol>

                <h2>Part A</h2>

                <h3>Conditions of Registration of Consent Manager</h3>
                <ol>
                    <li>The applicant is a company incorporated in India.</li>
                    <li>The applicant has sufficient capacity, including technical, operational and financial capacity,
                        to fulfil its obligations as a Consent Manager.</li>
                    <li>The financial condition and the general character of management of the applicant are sound.</li>
                    <li>The net worth of the applicant is not less than two crore rupees.</li>
                    <li>The volume of business likely to be available to and the capital structure and earning prospects
                        of the applicant are adequate.</li>
                    <li>The directors, key managerial personnel and senior management of the applicant company are
                        individuals with a general reputation and record of fairness and integrity.</li>
                    <li>The memorandum of association and articles of association of the applicant company contain
                        provisions requiring that the obligations under items 9 and 10 of Part B are adhered to, that
                        policies and procedures are in place to ensure such adherence, and that such provisions may be
                        amended only with the previous approval of the Board.</li>
                    <li>The operations proposed to be undertaken by the applicant are in the interests of Data
                        Principals.</li>
                    <li>It is independently certified that:
                        <ol>
                            <li>The interoperable platform of the applicant to enable the Data Principal to give,
                                manage, review and withdraw her consent is consistent with such data protection
                                standards and assurance framework as may be published by the Board on its website from
                                time to time; and</li>
                            <li>Appropriate technical and organisational measures are in place to ensure adherence to
                                such standards and framework and effective observance of the obligations under item 11
                                of Part B.</li>
                        </ol>
                    </li>
                </ol>

                <h2>Part B</h2>
                <h3>Obligations of Consent Manager</h3>
                <ol>
                    <li>
                        The Consent Manager shall enable a Data Principal using its platform to give consent to the
                        processing of her personal data by a Data Fiduciary onboarded onto such platform either directly
                        to such Data Fiduciary or through another Data Fiduciary onboarded onto such platform, who
                        maintains such personal data with the consent of that Data Principal.
                        <h2>Illustration:</h2>
                        <p>Individuals are enabled to give, manage, review and withdraw their consent to the processing
                            of their personal data through P, a platform maintained by a Consent Manager. X, an
                            individual, is a registered user on P. B1 and B2 are banks onboarded onto P.</p>
                        <ol type="A">
                            <li>Case 1: B1 sends a request on P to X for consent to process personal data contained in
                                her bank account statement. X maintains the bank account statement as a digital record
                                in her digital locker. X uses P to directly give her consent to B1 and proceeds to give
                                B1 access to her bank account statement.</li>
                            <li>Case 2: B1 sends a request on P to X for consent to process personal data contained in
                                her bank account statement. X maintains her bank account with B2. X uses P to route her
                                consent through B2 to B1, while also digitally instructing B2 to send her bank account
                                statement to B1. B2 proceeds to send the bank account statement to B1.</li>
                        </ol>
                    </li>
                    <li>The Consent Manager shall ensure that the manner of making available the personal data or its
                        sharing is such that the contents thereof are not readable by it.</li>
                    <li>The Consent Manager shall maintain on its platform a record of the following, namely:
                        <ol>
                            <li>Consents given, denied or withdrawn by her;</li>
                            <li>Notices preceding or accompanying requests for consent; and</li>
                            <li>Sharing of her personal data with a transferee Data Fiduciary.</li>
                        </ol>
                    </li>
                    <li>The Consent Manager:
                        <ol>
                            <li>Shall give the Data Principal using such platform access to such record;</li>
                            <li>Shall, on the request of the Data Principal and in accordance with its terms of service,
                                make available to her the information contained in such record, in machine-readable
                                form;</li>
                            <li>Shall maintain such record for at least seven years, or for such longer period as the
                                Data Principal and Consent Manager may agree upon or as may be required by law.</li>
                        </ol>
                    </li>
                    <li>The Consent Manager shall develop and maintain a website or app, or both, as the primary means
                        through which a Data Principal may access the services provided by the Consent Manager.</li>
                    <li>The Consent Manager shall not sub-contract or assign the performance of any of its obligations
                        under the Act and these rules.</li>
                    <li>The Consent Manager shall take reasonable security safeguards to prevent personal data breach.
                    </li>
                    <li>The Consent Manager shall act in a fiduciary capacity in relation to the Data Principal.</li>
                    <li>The Consent Manager shall avoid conflict of interest with Data Fiduciaries, including in respect
                        of their promoters and key managerial personnel.</li>
                    <li>The Consent Manager shall have in place measures to ensure that no conflict of interest arises
                        on account of its directors, key managerial personnel and senior management holding a
                        directorship, financial interest, employment or beneficial ownership in Data Fiduciaries, or
                        having a material pecuniary relationship with them.</li>
                    <li>The Consent Manager shall publish in an easily accessible manner, on its website or app, or
                        both, as the case may be, information regarding:
                        <ol>
                            <li>The promoters, directors, key managerial personnel and senior management of the company
                                registered as Consent Manager;</li>
                            <li>Every person who holds shares in excess of two per cent of the shareholding of the
                                company registered as Consent Manager;</li>
                            <li>Every body corporate in whose shareholding any promoter, director, key managerial
                                personnel or senior management of the Consent Manager holds shares in excess of two per
                                cent as on the first day of the preceding calendar month; and</li>
                            <li>Such other information as the Board may direct the Consent Manager to disclose in the
                                interests of transparency.</li>
                        </ol>
                    </li>
                    <li>The Consent Manager shall have in place effective audit mechanisms to review, monitor, evaluate
                        and report the outcome of such audit to the Board, periodically and on such other occasions as
                        the Board may direct, in respect of:
                        <ol>
                            <li>Technical and organisational controls, systems, procedures and safeguards;</li>
                            <li>Continued fulfilment of the conditions of registration; and</li>
                            <li>Adherence to its obligations under the Act and these rules.</li>
                        </ol>
                    </li>
                    <li>The control of the company registered as the Consent Manager shall not be transferred by way of
                        sale, merger or otherwise, except with the previous approval of the Board and subject to
                        fulfilment of such conditions as the Board may specify in this behalf.</li>
                </ol>

                <h2>Note:</h2>
                <p>In this Schedule,—</p>
                <ol>
                    <li>The expression “body corporate” shall include a company, a body corporate as defined under
                        clause (11) of section 2 of the Companies Act, 2013 (18 of 2013), a firm, a financial
                        institution, a scheduled bank or a public sector enterprise established or constituted by or
                        under any Central Act, Provincial Act or State Act, and any other incorporated association of
                        persons or body of individuals;</li>
                    <li>The expressions “company”, “control”, “director” and “key managerial personnel” shall have the
                        same meanings as are respectively assigned to them in the Companies Act, 2013 (18 or 2013);</li>
                    <li>The expression “net worth” shall mean the aggregate value of total assets as reduced by the
                        value of liabilities of the Consent Manager as appearing in its books of accounts; and</li>
                    <li>The expressions “promoter” and “senior management” shall have the same meanings as are
                        respectively assigned to them in the Companies Act, 2013 (18 or 2013).</li>
                </ol>
                <h2>SECOND SCHEDULE</h2>
                <p>Standards for processing of personal data by State and its instrumentalities under clause (b) of
                    section 7 and for processing of personal data necessary for the purposes specified in clause (b) of
                    sub-section (2) of section 17</p><br>
                <p>Implementation of appropriate technical and organisational measures to ensure effective observance of
                    the following, in accordance with applicable law, for the processing of personal data, namely:—</p>
                <ul>
                    <li><strong>a.</strong> Processing is carried out in a lawful manner.</li>
                    <li><strong>b.</strong> Processing is done for the uses specified in clause (b) of section 7 of the
                        Act or for the purposes specified in clause (b) of sub-section (2) of section 17 of the Act, as
                        applicable.</li>
                    <li><strong>c.</strong> Processing is limited to personal data that is necessary for such uses or
                        achieving such purposes.</li>
                    <li><strong>d.</strong> Reasonable efforts are made to ensure the accuracy of personal data.</li>
                    <li><strong>e.</strong> Personal data is retained until required for such uses or achieving such
                        purposes, or for compliance with any applicable law.</li>
                    <li><strong>f.</strong> Reasonable security safeguards are in place to prevent personal data
                        breaches and protect personal data in the possession or control of the Data Fiduciary.</li>
                    <li><strong>g.</strong> When processing under clause (b) of section 7 of the Act, the Data Principal
                        is informed about the processing and:
                        <ul>
                            <li>1. The business contact information of a representative who can answer questions on
                                behalf of the Data Fiduciary.</li>
                            <li>2. The communication link for accessing the website or app of the Data Fiduciary, along
                                with a description of other means for the Data Principal to exercise their rights.</li>
                            <li>3. The processing is carried out in accordance with applicable standards set forth by
                                the Central Government or any relevant law.</li>
                        </ul>
                    </li>
                    <li><strong>h.</strong> Accountability of the person or persons who determine the purpose and means
                        of processing personal data for effective observance of these standards.</li>
                </ul>

                <h2>THIRD SCHEDULE</h2>
                <ul>
                    <li>
                        <strong>Class of Data Fiduciary:</strong> Data Fiduciary who is an e-commerce entity having not
                        less than two crore registered users in India
                        <ul>
                            <li><strong>Purposes:</strong> For all purposes, except for the following:
                                <ol>
                                    <li>Enabling the Data Principal to access her user account;</li>
                                    <li>Enabling the Data Principal to access any virtual token that is issued by or on
                                        behalf of the Data Fiduciary, is stored on the digital facility or platform of
                                        such Data Fiduciary, and may be used to get money, goods or services.</li>
                                </ol>
                            </li>
                            <li><strong>Time Period:</strong> Three years from the date on which the Data Principal last
                                approached the Data Fiduciary for the performance of the specified purpose or exercise
                                of her rights, or the commencement of the Digital Personal Data Protection Rules, 2025,
                                whichever is latest.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Class of Data Fiduciary:</strong> Data Fiduciary who is an online gaming intermediary
                        having not less than fifty lakh registered users in India
                        <ul>
                            <li><strong>Purposes:</strong> For all purposes, except for the following:
                                <ol>
                                    <li>Enabling the Data Principal to access her user account;</li>
                                    <li>Enabling the Data Principal to access any virtual token that is issued by or on
                                        behalf of the Data Fiduciary, is stored on the digital facility or platform of
                                        such Data Fiduciary, and may be used to get money, goods or services.</li>
                                </ol>
                            </li>
                            <li><strong>Time Period:</strong> Three years from the date on which the Data Principal last
                                approached the Data Fiduciary for the performance of the specified purpose or exercise
                                of her rights, or the commencement of the Digital Personal Data Protection Rules, 2025,
                                whichever is latest.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Class of Data Fiduciary:</strong> Data Fiduciary who is a social media intermediary
                        having not less than two crore registered users in India
                        <ul>
                            <li><strong>Purposes:</strong> For all purposes, except for the following:
                                <ol>
                                    <li>Enabling the Data Principal to access her user account;</li>
                                    <li>Enabling the Data Principal to access any virtual token that is issued by or on
                                        behalf of the Data Fiduciary, is stored on the digital facility or platform of
                                        such Data Fiduciary, and may be used to get money, goods or services.</li>
                                </ol>
                            </li>
                            <li><strong>Time Period:</strong> Three years from the date on which the Data Principal last
                                approached the Data Fiduciary for the performance of the specified purpose or exercise
                                of her rights, or the commencement of the Digital Personal Data Protection Rules, 2025,
                                whichever is latest.</li>
                        </ul>
                    </li>
                </ul>

                <h2>Note:</h2>
                <ul>
                    <li><strong>"e-commerce entity"</strong> means any person who owns, operates or manages a digital
                        facility or platform for e-commerce as defined in the Consumer Protection Act, 2019 (35 of
                        2019), but does not include a seller offering her goods or services for sale on a marketplace
                        e-commerce entity as defined in the said Act.</li>
                    <li><strong>"online gaming intermediary"</strong> means any intermediary who enables the users of
                        its computer resource to access one or more online games.</li>
                    <li><strong>"social media intermediary"</strong> means an intermediary as defined in the Information
                        Technology Act, 2000 (21 of 2000) who primarily or solely enables online interaction between two
                        or more users and allows them to create, upload, share, disseminate, modify or access
                        information using her services.</li>
                    <li><strong>"user"</strong>, in relation to:
                        <ol>
                            <li>An e-commerce entity, means any person who accesses or avails any computer resource of
                                an e-commerce entity.</li>
                            <li>An online gaming intermediary or a social media intermediary, means any person who
                                accesses or avails of any computer resource of an intermediary for the purpose of
                                hosting, publishing, sharing, transacting, viewing, displaying, downloading or uploading
                                information.</li>
                        </ol>
                    </li>
                </ul>


                <h2>FOURTH SCHEDULE</h2>

                <h3>PART A</h3>
                <h4>Classes of Data Fiduciaries in respect of whom provisions of sub-sections (1) and (3) of section 9
                    shall not apply</h4>
                <ul>
                    <li><strong>Class of Data Fiduciary:</strong> A Data Fiduciary who is a clinical establishment,
                        mental health establishment or healthcare professional
                        <ul>
                            <li><strong>Conditions:</strong> Processing is restricted to provision of health services to
                                the child by such establishment or professional, to the extent necessary for the
                                protection of her health.</li>
                        </ul>
                    </li>
                    <li><strong>Class of Data Fiduciary:</strong> A Data Fiduciary who is an allied healthcare
                        professional
                        <ul>
                            <li><strong>Conditions:</strong> Processing is restricted to supporting implementation of
                                any healthcare treatment and referral plan recommended by such professional for the
                                child, to the extent necessary for the protection of her health.</li>
                        </ul>
                    </li>
                    <li><strong>Class of Data Fiduciary:</strong> A Data Fiduciary who is an educational institution
                        <ul>
                            <li><strong>Conditions:</strong> Processing is restricted to tracking and behavioural
                                monitoring—
                                <ol>
                                    <li>for the educational activities of such institution; or</li>
                                    <li>in the interests of safety of children enrolled with such institution.</li>
                                </ol>
                            </li>
                        </ul>
                    </li>
                    <li><strong>Class of Data Fiduciary:</strong> A Data Fiduciary who is an individual in whose care
                        infants and children in a crèche or child day care centre are entrusted
                        <ul>
                            <li><strong>Conditions:</strong> Processing is restricted to tracking and behavioural
                                monitoring in the interests of safety of children entrusted in the care of such
                                institution, crèche or centre.</li>
                        </ul>
                    </li>
                    <li><strong>Class of Data Fiduciary:</strong> A Data Fiduciary who is engaged by an educational
                        institution, crèche or child care centre for transport of children enrolled with such
                        institution, crèche or centre
                        <ul>
                            <li><strong>Conditions:</strong> Processing is restricted to tracking the location of such
                                children, in the interests of their safety, during the course of their travel to and
                                from such institution, crèche or centre.</li>
                        </ul>
                    </li>
                </ul>

                <h3>PART B</h3>
                <h4>Purposes for which provisions of sub-sections (1) and (3) of section 9 shall not apply</h4>
                <ul>
                    <li><strong>Purposes:</strong> For the exercise of any power, performance of any function or
                        discharge of any duties in the interests of a child, under any law for the time being in force
                        in India
                        <ul>
                            <li><strong>Conditions:</strong> Processing is restricted to the extent necessary for such
                                exercise, performance or discharge.</li>
                        </ul>
                    </li>
                    <li><strong>Purposes:</strong> For the providing or issuing of any subsidy, benefit, service,
                        certificate, licence or permit, by whatever name called, under law or policy or using public
                        funds, in the interests of a child, under clause (b) of section 7 of the Act
                        <ul>
                            <li><strong>Conditions:</strong> Processing is restricted to the extent necessary for such
                                provision or issuance.</li>
                        </ul>
                    </li>
                    <li><strong>Purposes:</strong> For the creation of a user account for communicating by email
                        <ul>
                            <li><strong>Conditions:</strong> Processing is restricted to the extent necessary for
                                creating such user account, the use of which is limited to communication by email.</li>
                        </ul>
                    </li>
                    <li><strong>Purposes:</strong> For ensuring that information likely to cause any detrimental effect
                        on the well-being of a child is not accessible to her
                        <ul>
                            <li><strong>Conditions:</strong> Processing is restricted to the extent necessary to ensure
                                that such information is not accessible to the child.</li>
                        </ul>
                    </li>
                    <li><strong>Purpose:</strong> For confirmation by the Data Fiduciary that the Data Principal is not
                        a child and observance of due diligence under rule 10
                        <ul>
                            <li><strong>Conditions:</strong> Processing is restricted to the extent necessary for such
                                confirmation or observance.</li>
                        </ul>
                    </li>
                </ul>

                <h3>Note:</h3>
                <ul>
                    <li>“allied healthcare professional” shall have the same meaning as is assigned to it in the
                        National Commission for Allied and Healthcare Professions Act, 2021 (14 of 2021);</li>
                    <li>“clinical establishment” means and includes all establishments and places—
                        <ol>
                            <li>falling within the meaning assigned to the term “clinical establishment” in clause (c)
                                of section 2 of the Clinical Establishments (Registration and Regulation) Act, 2010 (23
                                of 2010); and</li>
                            <li>as referred to in sub-clauses (i) or (ii) of the said clause that is owned, controlled
                                or managed by any force constituted under the Army Act, 1950 (46 of 1950), the Air Force
                                Act, 1950 (45 of 1950) or the Navy Act, 1957 (62 of 1957);</li>
                        </ol>
                    </li>
                    <li>“educational institution” shall mean and include an institution of learning that imparts
                        education, including vocational education;</li>
                    <li>“healthcare professional” shall have the same meaning as is assigned to it in the National
                        Commission for Allied and Healthcare Professions Act, 2021 (14 of 2021);</li>
                    <li>“health services” shall mean the services referred to in clause (j) of section 2 of the National
                        Commission for Allied and Healthcare Professions Act, 2021 (14 of 2021); and</li>
                    <li>“mental health establishment” shall have the same meaning as is assigned to it in the Mental
                        Healthcare Act, 2017 (10 of 2017).</li>
                </ul>

                <h2>FIFTH SCHEDULE</h2>
                <h3>Terms and conditions of service of Chairperson and other Members</h3>

                <h5>1. Salary</h5>
                <ul>
                    <li>The Chairperson shall be entitled to receive a consolidated salary of rupees four lakh fifty
                        thousand per month, without the facility of house and car.</li>
                    <li>Every Member other than the Chairperson shall be entitled to receive a consolidated salary of
                        rupees four lakh per month, without the facility of house and car.</li>
                </ul>

                <h5>2. Provident Fund</h5>
                <ul>
                    <li>The Chairperson and every other Member shall be eligible to contribute to the Provident Fund of
                        the Board, and the manner and terms and conditions applicable in this regard shall, mutatis
                        mutandis, be the same as those applicable to other officers and employees of the Board for their
                        Provident Fund.</li>
                </ul>

                <h5>3. Pension and gratuity</h5>
                <ul>
                    <li>The Chairperson and every other Member shall not be entitled to payment of pension or gratuity
                        for service rendered in the Board.</li>
                </ul>

                <h5>4. Travelling allowance</h5>
                <ul>
                    <li>The Chairperson and every other Member, while on transfer to join the Board, or on the expiry of
                        her term with the Board for proceeding to her home town with family, or on tour within India,
                        shall be entitled to journey allowance, daily allowance and reimbursement of expense on
                        transportation of personal effects at such scales and rates as are applicable to an officer of
                        the Central Government in the following level of the pay matrix:
                        <ol>
                            <li>Level 17, in the case of the Chairperson</li>
                            <li>Level 15, in the case of every other Member</li>
                        </ol>
                    </li>
                    <li>The Chairperson and every other Member may undertake tour outside India only in accordance with
                        guidelines issued by the Central Government and shall be entitled to draw the same allowances as
                        an officer of the Central Government in the corresponding pay matrix level.</li>
                </ul>

                <h5>5. Medical assistance</h5>
                <ul>
                    <li>The Chairperson and every other Member shall be entitled to such medical assistance as may be
                        admissible under any group health insurance scheme of the Board.</li>
                    <li>If the Chairperson or other Member has retired from Government service or a public sector
                        entity, they may opt to be governed by the medical assistance rules of their previous service.
                    </li>
                </ul>

                <h5>6. Leave</h5>
                <ul>
                    <li>The authority competent to sanction leave shall be the Central Government for the Chairperson
                        and the Chairperson for other Members.</li>
                    <li>The Chairperson and every other Member may avail of leave as per the Central Civil Services
                        (Leave) Rules, 1972.</li>
                    <li>They shall be entitled to casual leave and earned leave encashment as applicable to government
                        servants.</li>
                </ul>

                <h5>7. Leave travel concession</h5>
                <ul>
                    <li>Leave travel concession shall be admissible as per the provisions applicable to officers in
                        Level 17 (Chairperson) and Level 15 (Members) of the Central Government.</li>
                    <li>They may avail of leave travel concession to their home town or any place in India once in two
                        years.</li>
                </ul>

                <h5>8. Other terms and conditions of service</h5>
                <ul>
                    <li>The Chairperson and every other Member shall ensure absence of conflict of interest in their
                        duties.</li>
                    <li>Provisions of the Central Civil Services (Classification, Control and Appeal) Rules, 1965, shall
                        apply.</li>
                    <li>They shall not be entitled to sitting fees for attending meetings or sumptuary allowance.</li>
                    <li>Any matter not expressly provided in these rules shall be referred to the Central Government.
                    </li>
                </ul>

                <h5>9. Pay matrix</h5>
                <ul>
                    <li>The pay matrix refers to the one in Annexure I of the Central Government’s resolution published
                        in the Official Gazette vide Notification no. 1-2/2016-IC, dated 25th July 2016.</li>
                </ul>


                <h2>SIXTH SCHEDULE</h>
                    <h3>Terms and conditions of appointment and service of officers and employees of Board</h3>

                    <h5>1. Classes of officials</h5>
                    <ul>
                        <li>(1) The Board may, in accordance with the Fundamental Rules and applicable guidelines issued
                            by the Ministry of Personnel, Public Grievances and Pensions, Department of Personnel and
                            Training, appoint officers and employees on deputation from the Central Government, a State
                            Government, an autonomous body under the overall control of the Central Government or a
                            State Government, a statutory body, or a public sector enterprise, for a period not
                            exceeding five years.</li>
                        <li>(2) The Board may also receive or take on deputation any officer or other employee from the
                            National Institute for Smart Government, for a period not exceeding five years, with salary
                            and allowances guided by market standards and on such other terms and conditions as the
                            Board may decide.</li>
                    </ul>

                    <h5>2. Gratuity</h5>
                    <ul>
                        <li>The officers and employees shall be entitled to payment of such gratuity as may be
                            admissible under the Payment of Gratuity Act, 1972 (39 of 1972).</li>
                    </ul>

                    <h5>3. Travelling allowance</h5>
                    <ul>
                        <li>The travelling allowance payable to the officers and employees shall, <i>mutatis
                                mutandis</i>, be the same as those applicable to the officers and employees of the
                            Central Government.</li>
                    </ul>

                    <h5>4. Medical assistance</h5>
                    <ul>
                        <li>The officers and employees shall be entitled to such medical assistance as may be admissible
                            to them and their eligible dependants under any group health insurance scheme of the Board,
                            made with the previous approval of the Central Government.</li>
                    </ul>

                    <h5>5. Leave</h5>
                    <ul>
                        <li>(1) The officers and employees may avail of such kinds of leaves as are admissible to a
                            Government servant under the Central Civil Services (Leave) Rules, 1972, subject to the
                            conditions applicable under the said rules, and shall be eligible for encashment of earned
                            leave as provided therein.</li>
                        <li>(2) The officers and employees shall be entitled to casual leave to such extent as is
                            admissible to a Government servant under instructions issued by the Central Government.</li>
                    </ul>

                    <h5>6. Leave travel concession</h5>
                    <ul>
                        <li>Leave travel concession shall be admissible to the officers and employees appointed under
                            clause (1) of paragraph 1, in accordance with the provisions applicable to persons appointed
                            to civil services and posts in connection with the affairs of the Union of India under the
                            Central Civil Services (Leave Travel Concession) Rules, 1988.</li>
                    </ul>

                    <h5>7. Other terms and conditions of service</h5>
                    <ul>
                        <li>(1) The provisions of the Civil Service (Conduct) Rules, 1964 shall apply to the officers
                            and employees in like manner as applicable to a person appointed to a civil service or post
                            in connection with the affairs of the Union of India under the said rules.</li>
                        <li>(2) The provisions contained in Part IV to Part IX of the Central Civil Services
                            (Classification, Control and Appeal) Rules, 1965 shall apply, <i>mutatis mutandis</i>, to
                            the officers and employees appointed under clause (1) of paragraph 1, in like manner as
                            applicable to a Government servant under the said rules.</li>
                        <li>(3) Any matter relating to the terms and conditions of service of the officers and employees
                            appointed under clause (1) of paragraph 1, in respect of which no express provision has been
                            made in these rules, shall be referred to the Central Government for its decision, and the
                            decision of the Central Government on the same shall be final.</li>
                    </ul>





                    <h2>SEVENTH SCHEDULE</h2>

                    <strong>Purpose:</strong> Use by the State or any of its instrumentalities, of personal data of
                    a Data Principal in the interest of sovereignty and integrity of India or security of the State.

                    <strong>Authorised Person:</strong> Such officer of the State or of any of its instrumentalities
                    notified under sub-section (2) of section 17 of the Act, as the Central Government or the head
                    of such instrumentality, as the case may be, may designate in this behalf.

                    <ul>
                        <li><strong>Use by the State or any of its instrumentalities for the following purposes,
                                namely:</strong>
                            <ul>
                                <li>I. Performance of any function under any law for the time being in force in
                                    India; or</li>
                                <li>II. Disclosure of any information for fulfilling any obligation under any law
                                    for the time being in force in India – <strong>Person authorised under
                                        applicable law</strong></li>
                            </ul>
                        </li>
                        <li><strong>Carrying out assessment for notifying any Data Fiduciary or class of Data
                                Fiduciaries as Significant Data Fiduciary –</strong> Such officer of the Central
                            Government, in the Ministry of Electronics and Information Technology, as the Secretary
                            in charge of the said Ministry.</li>
                    </ul>



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