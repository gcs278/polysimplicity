<div class="container">
    <h1 class="text-center"><?php echo $candidate_name; ?></h1>
    <div class="row-fluid">
        <div class="span4">
            <img src="data:image/jpg;base64, <?php echo $image ?>" class="img-rounded" width="300" height="275"\>
        </div> 
        <div class="span8 well">
        <h3>Demographics:</h3> 
            <table class="table table-striped">
                <tbody>
                    <tr><td><strong>Gender:</strong> <?php echo $gender?></td></tr>
                    <tr><td><strong>Political Party:</strong> <?php echo $party?></td></tr>
                    <tr><td><strong>Birth State:</strong> <?php echo $birth_state?></td></tr>
                    <tr><td><strong>Birth Date: </strong><?php echo $birth_date?></td></tr>
                </tbody>
            </table>
            
        </div>
    </div>

        <div class="candidate-wrapper">
        <div class="views-wrapper <?php echo $candidate_party; ?>">
            <div class='view'>
                Taxation
                <div class='view-nu'>
                    <br>
                    <?php echo $candidate_taxation; ?>
                </div>
            </div>
            <div class='view'>
                Abortion
                <div class='view-no'>
                    <br>
                    <?php echo $candidate_abortion; ?>
                </div>
            </div>
            <div class='view'>
                Military
                <div class='view-nu'>
                    <br>
                    <?php echo $candidate_military; ?>
                </div>
            </div>
            <div class='view'>
                Guns
                <div class='view-no'>
                    <br>
                    <?php echo $candidate_guns; ?>
                </div>
            </div>
            <div class='view'>
                Marijuana
                <div class='view-nu'>
                    <br>
                    <?php echo $candidate_marijuana; ?>
                </div>
            </div>
            <div class='view'>
                Same Sex Marriage
                <div class='view-no'>
                    <br>
                    <?php echo $candidate_sameSexMarriage; ?>
                </div>
            </div>
            <div class='view'>
                Immigration
                <div class='view-no'>
                    <br>
                    <?php echo $candidate_immigration; ?>
                </div>
            </div>
            <div class='view'>
                Education
                <div class='view-no'>
                    <br>
                    <?php echo $candidate_education; ?>
                </div>
            </div>
            <div class='view'>
                Environmental
                <div class='view-no'>
                    <br>
                    <?php echo $candidate_environment; ?>
                </div>
            </div>
            <div class='view'>
                Health Care
                <div class='view-no'>
                    <br>
                    <?php echo $candidate_healthCare; ?>
                </div>
            </div>
            <div class='view'>
                Social Security
                <div class='view-no'>
                    <br>
                    <?php echo $candidate_socialSecurity; ?>
                </div>
            </div>
            <div class='view'>
                Death Penalty
                <div class='view-nu'>
                    <br>
                    <?php echo $candidate_deathPenalty; ?>
                </div>
            </div>
        </div>
        <div class='extra'>
            <div class ="categories">
                    <h3>In Depth Information:</h3>
                    <p>
                        &nbsp&nbsp;Taxation:<br><br>
                        &nbsp&nbsp;Abortion:<br><br><br><br>
                        &nbsp&nbsp;Military:<br><br><br><br><br><br>
                        &nbsp&nbsp;Guns:<br><br><br><br><br>
                        &nbsp&nbsp;Marijuana:<br><br>
                        &nbsp&nbsp;Same Sex Marriage:<br><br>
                        &nbsp&nbsp;Immigration:<br><br><br><br><br><br><br><br><br><br>
                        &nbsp&nbsp;Education:<br><br><br><br><br><br><br><br>
                        &nbsp&nbsp;Environmental:<br><br><br><br><br>
                        &nbsp&nbsp;Health Care:<br><br><br><br><br>
                        &nbsp&nbsp;Social Security:<br><br><br><br><br><br>
                        &nbsp&nbsp;Death Penalty:<br>
                    </p>
                </div>
                <div class="paragraphs">
                    <p>
                        <?php echo $candidate_taxationDescrip; ?> <br><br>
                        <!--http://terrymcauliffe.com/mcauliffe-proposes-local-tax-reform-plan-reduce-burdensome-taxes-for-virginias-businesses/
                        https://www.healthcare.gov/what-if-my-state-is-not-expanding-medicaid/
                        http://articles.washingtonpost.com/2013-09-19/opinions/42216204_1_medicaid-expansion-medicaid-coverage-medicaid-program-->
                        
                        <?php echo $candidate_abortionDescrip; ?><br><br>
                        <!--http://www.factcheck.org/2013/09/miscasting-mcauliffes-abortion-stance/-->
                        
                        <?php echo $candidate_militaryDescrip; ?><br><br>
                        <!--http://articles.washingtonpost.com/2013-09-05/local/41792263_1_ken-cuccinelli-syria-intervention-terry-mcauliffe
                        http://terrymcauliffe.com/on-the-issues/veterans/standing-up-for-virginias-veterans-and-military-families/-->
                        
                        <?php echo $candidate_gunsDescrip; ?><br><br>
                        <!--http://terrymcauliffe.com/investing-in-virginias-urban-centers/
                        http://articles.washingtonpost.com/2012-12-17/local/35887462_1_mental-health-issues-terry-mcauliffe-assault-weapons-ban-->
                        
                        <?php echo $candidate_marijuanaDescrip; ?><br><br>
                        
                        <?php echo $candidate_sameSexMarriageDescrip; ?><br><br>
                        <!--http://action.terrymcauliffe.com/page/s/lgbt-->
                        
                        <?php echo $candidate_immigrationDescrip; ?><br><br>
                        <!--http://www.ontheissues.org/governor/Terry_McAuliffe_Immigration.htm
                        http://dreamact.info/faq/1
                        http://bearingdrift.com/2013/07/29/mcauliffe-on-immigration-then-get-them-back-to-the-countries-where-they-came-from/-->

                        <?php echo $candidate_educationDescrip; ?><br><br>
                        <!--http://terrymcauliffe.com/on-the-issues/education/terrys-platform-for-putting-virginia-first-education/-->
                        
                        <?php echo $candidate_environmentDescrip; ?><br><br>
                        <!--http://terrymcauliffe.com/on-the-issues/environment/terrys-platform-for-putting-virginia-first-environment/
                        http://www.nationaljournal.com/energy/mcauliffe-announces-support-for-new-epa-rules-20131001?mrefid=EnergyRiver1-->

                        <?php echo $candidate_healthCareDescrip; ?><br><br>
                        <!--http://terrymcauliffe.com/on-the-issues/healthcare/healthcare-policy/-->
                        
                        <?php echo $candidate_socialSecurityDescrip; ?><br><br>
                        <!--http://www.ontheissues.org/governor/Terry_McAuliffe_Social_Security.htm
                        http://augustafreepress.com/mcauliffe-launches-plan-protect-virginias-seniors/-->

                        <?php echo $candidate_deathPenaltyDescrip; ?><br><br>  
                        </p>
                </div>
        </div>
        </div>

