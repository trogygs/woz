<!DOCTYPE html> 
<html>
 <head>
	<title>Wizard Dialogue</title>
	<link type="text/css" rel="stylesheet" href="style.css" />
 </head>
 <body>

	<?php // Wizard test ?>

	<?php

		session_start();
		$_SESSION['name']='Tutor';
		
	?>

	<div id="wrapper">

		<div id="menu">
			<p class="logout"><a id="exit" href="#">Log out</a></p>
			<div style="clear:both"></div>
		</div>
		
		<div id="chatbox"><?php
			//if(file_exists("log/log.html") && filesize("log/log.html") > 0) {
			//	$handle = fopen("log/log.html","r");
			//	$contents = fread($handle, filesize("log/log.html"));
			//	fclose($handle);
			
			//	echo $contents;
			//}
		?></div>

		<form name="message" action="" method="POST">
			<input name="textmsg" type="text" id="textmsg"/>
			<input name="submittext" type ="submit" id="submittext" value="Enter" />




			<br><span>What is BC</span><select name="feedbackA" id="feedbackA">
				<option value="Breast cancer is cancer that forms in the breast tissue.">Breast cancer is cancer that forms in the breast tissue.</option>
				<option value="Breast cancer usually forms in the ducts and lobes of the breast.">Breast cancer usually forms in the ducts and lobes of the breast.</option>
				<option value="Tumors can be either benign or malignant.">Tumors can be either benign or malignant.</option>
				<option value="Benign tumors are not dangerous, but are often removed in case they later become dangerous.">Benign tumors are not dangerous, but are often removed in case they later become dangerous.</option>
				<option value="Benign tumors do not spread through the body, though they may grow larger in the same place.">Benign tumors do not spread through the body, though they may grow larger in the same place.</option>
				<option value="A malignant tumor is one that has become cancerous and may spread to other parts of the body.">A malignant tumor is one that has become cancerous and may spread to other parts of the body.</option>
				<option value="Breast cancer that has metastasized to other parts of the body remains breast cancer because it is still made up of breast cancer cells.">Breast cancer that has metastasized to other parts of the body remains breast cancer because it is still made up of breast cancer cells.</option>
				<option value="Breast cancer forms when cells begin to divide uncontrollably and form tumors.">Breast cancer forms when cells begin to divide uncontrollably and form tumors.</option>
				<option value="A tumor that has spread to other parts of the body is called metastatic.">A tumor that has spread to other parts of the body is called metastatic.</option>
				<option value="There are two main types of breast cancer. Ductal carcinoma forms in the ducts, and lobular carcinoma forms in the lobes.">There are two main types of breast cancer. Ductal carcinoma forms in the ducts, and lobular carcinoma forms in the lobes.</option>
				<option value="Cancer is a disease that forms when cells begin to grow uncontrollably and do not die off as they normally would.">Cancer is a disease that forms when cells begin to grow uncontrollably and do not die off as they normally would.</option>
				<option value="Tumors form when cells begin to grow uncontrollably and excess cells do not die off like normal.">Tumors form when cells begin to grow uncontrollably and excess cells do not die off like normal.</option>
				<option value="The symptoms of breast cancer include changes in the size or texture of a woman's breasts, the development of lumps, pain or sensitivity in the breast, and unusual discharge from the nipple.">The symptoms of breast cancer include changes in the size or texture of a woman's breasts, the development of lumps, pain or sensitivity in the breast, and unusual discharge from the nipple.</option>
				</select>
			<input name="submitmsgA" type="submit" id="submitmsgA" value="Enter" />


			<br><span>BC Spread</span><select name="feedbackB" id="feedbackB">
				<option value="Breast cancer cells spread by breaking off from the tumor and traveling to other parts of the body through the blood, lymph nodes, or surrounding tissue.">Breast cancer cells spread by breaking off from the tumor and traveling to other parts of the body through the blood, lymph nodes, or surrounding tissue.</option>
				<option value="Most breast cancer first spreads to areas nearby the breast.">Most breast cancer first spreads to areas nearby the breast.</option>
				<option value="Breast cancer cells can spread to most areas of the body through the blood, lymph nodes, and surrounding tissues.">Breast cancer cells can spread to most areas of the body through the blood, lymph nodes, and surrounding tissues.</option>
				</select>
			<input name="submitmsgB" type="submit" id="submitmsgB" value="Enter" />


			<br><span>BRCA Mutations</span><select name="feedbackC" id="feedbackC">
				<option value="BRCA stands for breast cancer, and is a gene in a person's DNA that normally prevents excessive cell growth.">BRCA stands for breast cancer, and is a gene in a person's DNA that normally prevents excessive cell growth.</option>
				<option value="BRCA mutations can be found in both men and women, and both fathers and mothers can pass it to their children.">BRCA mutations can be found in both men and women, and both fathers and mothers can pass it to their children.</option>
				<option value="Genes can mutate naturally when cells divide or when there is damage. Genetic mutations normally cannot be repaired and are passed on from generation to generation.">Genes can mutate naturally when cells divide or when there is damage. Genetic mutations normally cannot be repaired and are passed on from generation to generation.</option>
				<option value="Normal BRCA genes help prevent excessive cell growth. When these genes are mutated they cannot do this, leading to an increased risk of tumors and cancer.">Normal BRCA genes help prevent excessive cell growth. When these genes are mutated they cannot do this, leading to an increased risk of tumors and cancer.</option>
				<option value="Women with BRCA mutations are at increased risk of breast cancer.">Women with BRCA mutations are at increased risk of breast cancer.</option>
				<option value="Normally all of a person's cells in their body contain the same genes.">Normally all of a person's cells in their body contain the same genes.</option>
				<option value="There may be other genes that are linked to breast cancer, but BRCA mutations account for most cases of increased genetic risk">There may be other genes that are linked to breast cancer, but BRCA mutations account for most cases of increased genetic risk</option>
				<option value="Gene mutations cannot be prevented, but can be detected with genetic tests.">Gene mutations cannot be prevented, but can be detected with genetic tests.</option>
				<option value="When a woman inherits a mutated BRCA gene she is about five times as likely to develop breast cancer.">When a woman inherits a mutated BRCA gene she is about five times as likely to develop breast cancer.</option>
				<option value="BRCA mutations are very rare, with only about 1% of the population inheriting a mutated BRCA gene.">BRCA mutations are very rare, with only about 1% of the population inheriting a mutated BRCA gene.</option>
				<option value="Having a BRCA mutation does not guarantee that a woman will develop breast cancer, it only raises her risk. The mutation may still be passed down to her children though.">Having a BRCA mutation does not guarantee that a woman will develop breast cancer, it only raises her risk. The mutation may still be passed down to her children though.</option>
				<option value="Genetic mutations only account for a small amount of breast cancers, but if you do have a genetic mutation your chances are much higher.">Genetic mutations only account for a small amount of breast cancers, but if you do have a genetic mutation your chances are much higher.</option>
				<option value="Mutations in both BRCA 1 and BRCA 2 lead to about the same increase in risk.">Mutations in both BRCA 1 and BRCA 2 lead to about the same increase in risk.</option>
				</select>
			<input name="submitmsgC" type="submit" id="submitmsgC" value="Enter" />


			<br><span>BC in Men</span><select name="feedbackD" id="feedbackD">
				<option value="Breast cancer screening is not typically recommended for men.">Breast cancer screening is not typically recommended for men.</option>
				<option value="Only about 1% of all cases of breast cancer are found in men.">Only about 1% of all cases of breast cancer are found in men.</option>
				<option value="Breast cancer in men works much like breast cancer in women, only much rarer.">Breast cancer in men works much like breast cancer in women, only much rarer.</option>
				<option value="Breast cancer in men is very rare because men have much less breast tissue than women.">Breast cancer in men is very rare because men have much less breast tissue than women.</option>
				<option value="Men can inherit BRCA mutations and be at increased risk. However, because breast cancer is so rare in men to begin with even increased risk is very low.">Men can inherit BRCA mutations and be at increased risk. However, because breast cancer is so rare in men to begin with even increased risk is very low.</option>
				</select>
			<input name="submitmsgD" type="submit" id="submitmsgD" value="Enter" />


			<br><span>Screening / Prevention</span><select name="feedbackE" id="feedbackE">
				<option value="While some steps can be taken to avoid getting breast cancer, early detection is a much more beneficial route for most women.">While some steps can be taken to avoid getting breast cancer, early detection is a much more beneficial route for most women.</option>
				<option value="Active surveillance involves frequent screenings and breast exams to detect cancer early before it has spread.">Active surveillance involves frequent screenings and breast exams to detect cancer early before it has spread.</option>
				<option value="For women with increased risk due to genetic mutations, prophylactic surgery or use of the drug Tamoxifen can reduce the risk of getting breast cancer.">For women with increased risk due to genetic mutations, prophylactic surgery or use of the drug Tamoxifen can reduce the risk of getting breast cancer.</option>
				<option value="Many doctors recommend that the average woman receive screenings once a year if she is over the age of 40.">Many doctors recommend that the average woman receive screenings once a year if she is over the age of 40.</option>
				<option value="Breast cancer screenings (such as mammograms) can sometimes detect false positives that are not actually tumors, especially in younger women.">Breast cancer screenings (such as mammograms) can sometimes detect false positives that are not actually tumors, especially in younger women.</option>
				<option value="Breast cancer is typically first detected as lumps in the breast by a mammogram or breast exam.">Breast cancer is typically first detected as lumps in the breast by a mammogram or breast exam.</option>
				<option value="In most cases removing healthy breast tissue through prophylactic surgery prevents breast cancer, though in rare cases it can still develop.">In most cases removing healthy breast tissue through prophylactic surgery prevents breast cancer, though in rare cases it can still develop.</option>
				<option value="Some drugs, such as Tamoxifen, have been found to help prevent breast cancer.">Some drugs, such as Tamoxifen, have been found to help prevent breast cancer.</option>
				<option value="A mammogram is a method of screening the breast for the presence of tumors or other abnormalities.">A mammogram is a method of screening the breast for the presence of tumors or other abnormalities.</option>
				<option value="It is not possible to remove all of a woman's breast tissue through prophylactic surgery, so there is always a small amount of risk still.">It is not possible to remove all of a woman's breast tissue through prophylactic surgery, so there is always a small amount of risk still.</option>
				<option value="As long as the cancer is detected at an early stage before it has spread, almost all women are able to be treated and survive.">As long as the cancer is detected at an early stage before it has spread, almost all women are able to be treated and survive.</option>
				<option value="Prophylactic surgery reduces the chances that breast cancer will develop by reducing the amount of breast tissue a woman has.">Prophylactic surgery reduces the chances that breast cancer will develop by reducing the amount of breast tissue a woman has.</option>
				<option value="The ducts and lobes that make milk are part of the breast tissue that is removed during prophylactic surgery.">The ducts and lobes that make milk are part of the breast tissue that is removed during prophylactic surgery.</option>
				<option value="Breast cancer screening is typically not recommended for younger women because it results in many false positives.">Breast cancer screening is typically not recommended for younger women because it results in many false positives.</option>
				</select>
			<input name="submitmsgE" type="submit" id="submitmsgE" value="Enter" />


			<br><span>Genetic Testing</span><select name="feedbackF" id="feedbackF">
				<option value="There are genetic tests that look for mutations in the BRCA 1 and BRCA 2 genes, which can increase a woman's risk of breast cancer when mutated">There are genetic tests that look for mutations in the BRCA 1 and BRCA 2 genes, which can increase a woman's risk of breast cancer when mutated</option>
				<option value="A woman who receives a true negative test result for BRCA mutations has slightly less risk than that of the average woman.">A woman who receives a true negative test result for BRCA mutations has slightly less risk than that of the average woman.</option>
				<option value="A woman might not want to be tested for breast cancer risk because her family members may not want to know.">A woman might not want to be tested for breast cancer risk because her family members may not want to know.</option>
				<option value="Genetic testing requires special equipment, and most insurance companies do not currently cover these costs.">Genetic testing requires special equipment, and most insurance companies do not currently cover these costs.</option>
				<option value="Most genetic tests are performed on a woman's blood and look for mutations in her genes.">Most genetic tests are performed on a woman's blood and look for mutations in her genes.</option>
				<option value="Genetic testing can help identify if a woman is at increased risk.">Genetic testing can help identify if a woman is at increased risk.</option>
				<option value="Genetic counseling is recommended for women who may be at increased risk of breast cancer.">Genetic counseling is recommended for women who may be at increased risk of breast cancer.</option>
				</select>
			<input name="submitmsgF" type="submit" id="submitmsgF" value="Enter" />


			<br><span>Stages / Danger</span><select name="feedbackG" id="feedbackG">
				<option value="Stage 0 is abnormal cells that have not yet become cancer.">Stage 0 is abnormal cells that have not yet become cancer.</option>
				<option value="Stage 1 cancer is localized cancer, and has not spread to other areas of the body.">Stage 1 cancer is localized cancer, and has not spread to other areas of the body.</option>
				<option value="Stage 2 cancer is when a tumor has grown larger but has not yet spread to other areas of the body.">Stage 2 cancer is when a tumor has grown larger but has not yet spread to other areas of the body.</option>
				<option value="Stage 3 cancer is locally spread cancer, meaning it has spread to areas of the body nearby the breast.">Stage 3 cancer is locally spread cancer, meaning it has spread to areas of the body nearby the breast.</option>
				<option value="Stage 4 cancer is metastatic and has spread to distant parts of the body.">Stage 4 cancer is metastatic and has spread to distant parts of the body.</option>
				<option value="Breast cancer is measured from stage 0 through stage 4.">Breast cancer is measured from stage 0 through stage 4.</option>
				<option value="The stage of cancer is based on the size of tumors and how far they have spread.">The stage of cancer is based on the size of tumors and how far they have spread.</option>
				<option value="The size of a tumor depends on its stage. Early stage tumor are only a few centimeters in size, but later stage tumors can grow much larger.">The size of a tumor depends on its stage. Early stage tumor are only a few centimeters in size, but later stage tumors can grow much larger.</option>
				<option value="As breast cancer progresses through different stages and spreads through the body it becomes more dangerous.">As breast cancer progresses through different stages and spreads through the body it becomes more dangerous.</option>
				<option value="The danger a tumor presents is based on how much evidence there is that it has spread throughout the body.">The danger a tumor presents is based on how much evidence there is that it has spread throughout the body.</option>
				<option value="Breast cancer becomes deadly when it reaches stages where it has spread to vital organs and begins to cause them to fail.">Breast cancer becomes deadly when it reaches stages where it has spread to vital organs and begins to cause them to fail.</option>
				<option value="Most women survive breast cancer that is found at an early stage, before it has spread throughout the body.">Most women survive breast cancer that is found at an early stage, before it has spread throughout the body.</option>
				<option value="The survival rate is quite low for women who are at a later stage of breast cancer that has already spread throughout the body.">The survival rate is quite low for women who are at a later stage of breast cancer that has already spread throughout the body.</option>
				<option value="Even with BRCA mutations, most women survive breast cancer.">Even with BRCA mutations, most women survive breast cancer.</option>
				<option value="Death can occur at any stage, though the risk is greater the farther the cancer has spread.">Death can occur at any stage, though the risk is greater the farther the cancer has spread.</option>
				</select>
			<input name="submitmsgG" type="submit" id="submitmsgG" value="Enter" />


			<br><span>Ethnicity</span><select name="feedbackH" id="feedbackH">
				<option value="BRCA mutations have been observed more commonly in people of Ashkenazi Jewish descent than in people of other ethnicities.">BRCA mutations have been observed more commonly in people of Ashkenazi Jewish descent than in people of other ethnicities.</option>
				<option value="Some races and ethnicities have been shown to have a higher incidence of BRCA mutations.">Some races and ethnicities have been shown to have a higher incidence of BRCA mutations.</option>
				<option value="Women of northern European descent are at slightly increased risk over women of other ethnicities.">Women of northern European descent are at slightly increased risk over women of other ethnicities.</option>
				<option value="Some races and ethnicities have a higher chance of inheriting a mutated BRCA gene, leading to increased risk. Factors like a family history influence risk much more though.">Some races and ethnicities have a higher chance of inheriting a mutated BRCA gene, leading to increased risk. Factors like a family history influence risk much more though.</option>
				</select>
			<input name="submitmsgH" type="submit" id="submitmsgH" value="Enter" />


			<br><span>Treatment</span><select name="feedbackI" id="feedbackI">
				<option value="Breast cancer can be treated in several ways, including chemotherapy and surgery to remove malignant tumors.">Breast cancer can be treated in several ways, including chemotherapy and surgery to remove malignant tumors.</option>
				<option value="Treatment for early stages of cancer usually involves surgery to remove malignant tumors.">Treatment for early stages of cancer usually involves surgery to remove malignant tumors.</option>
				<option value="The treatment for breast cancer depends on the stage of the cancer. Earlier stages can be treated more easily than later stages.">The treatment for breast cancer depends on the stage of the cancer. Earlier stages can be treated more easily than later stages.</option>
				<option value="Treatment for early stages of breast cancer is typically easy, and most women survive.">Treatment for early stages of breast cancer is typically easy, and most women survive.</option>
				<option value="At later stages of cancer removal of tumors is less helpful because the cancer has spread to different areas of the body, and most treatment involves chemotherapy.">At later stages of cancer removal of tumors is less helpful because the cancer has spread to different areas of the body, and most treatment involves chemotherapy.</option>
				<option value="When chemotherapy is used to treat cancer, it also affects healthy cells, which can lead to damage to many other parts of the body.">When chemotherapy is used to treat cancer, it also affects healthy cells, which can lead to damage to many other parts of the body.</option>
				<option value="Surgery to remove breast cancer tumors sometimes means that some or all of a woman's breast tissue must be removed.">Surgery to remove breast cancer tumors sometimes means that some or all of a woman's breast tissue must be removed.</option>
				<option value="The length of treatment usually depends on how far the cancer has spread. Cancer that has spread farther takes longer to treat.">The length of treatment usually depends on how far the cancer has spread. Cancer that has spread farther takes longer to treat.</option>
				<option value="Breast cancer is usually treated by oncologists, doctors who specialize in treating cancer.">Breast cancer is usually treated by oncologists, doctors who specialize in treating cancer.</option>
				<option value="Chemotherapy is the use of drugs to attack cancer cells, although many healthy cells are also affected.">Chemotherapy is the use of drugs to attack cancer cells, although many healthy cells are also affected.</option>
				</select>
			<input name="submitmsgI" type="submit" id="submitmsgI" value="Enter" />

			<br><span>Other Cancers</span><select name="feedbackJ" id="feedbackJ">
				<option value="Breast cancer is the cancer that causes the second most deaths in women, after lung cancer.">Breast cancer is the cancer that causes the second most deaths in women, after lung cancer.</option>
				<option value="Breast cancer is the second most common form of cancer in women, after skin cancer.">Breast cancer is the second most common form of cancer in women, after skin cancer.</option>
				<option value="Breast cancer is very well known because it affects so many women. Only skin cancer is more common among women.">Breast cancer is very well known because it affects so many women. Only skin cancer is more common among women.</option>
				<option value="Ovarian cancer is cancer found in the ovaries.">Ovarian cancer is cancer found in the ovaries.</option>
				<option value="Ovarian cancer has been found to be a risk factor for breast cancer.">Ovarian cancer has been found to be a risk factor for breast cancer.</option>
				<option value="The same genes that lead to increased risk of breast cancer have been found to lead to increased risk of ovarian cancer.">The same genes that lead to increased risk of breast cancer have been found to lead to increased risk of ovarian cancer.</option>
				</select>
			<input name="submitmsgJ" type="submit" id="submitmsgJ" value="Enter" />


			<br><span>Risk Factors / Odds</span><select name="feedbackK" id="feedbackK">
				<option value="About 12.5% of women face breast cancer during their lifetime.">About 12.5% of women face breast cancer during their lifetime.</option>
				<option value="A woman with a BRCA mutation has about a 60% chance of getting breast cancer at some point in her life.">A woman with a BRCA mutation has about a 60% chance of getting breast cancer at some point in her life.</option>
				<option value="About 40,000 women die from breast cancer each year in the United States.">About 40,000 women die from breast cancer each year in the United States.</option>
				<option value="About 200,000 women have breast cancer in the United States in a given year.">About 200,000 women have breast cancer in the United States in a given year.</option>
				<option value="Environmental risk factors for breast cancer include smoking and excessive alcohol consumption.">Environmental risk factors for breast cancer include smoking and excessive alcohol consumption.</option>
				<option value="Relative risk is determined using the risk factors that a woman has that increase her risk above that of the general population.">Relative risk is determined using the risk factors that a woman has that increase her risk above that of the general population.</option>
				<option value="Having a family history is a risk factor that increases the chances that a woman will develop breast cancer.">Having a family history is a risk factor that increases the chances that a woman will develop breast cancer.</option>
				<option value="A family history of other cancers besides breast cancer and ovarian cancer does not indicate increased risk of breast cancer.">A family history of other cancers besides breast cancer and ovarian cancer does not indicate increased risk of breast cancer.</option>
				<option value="The size of a woman's breasts has not been found to increase her risk.">The size of a woman's breasts has not been found to increase her risk.</option>
				<option value="Relative risk is the risk a woman faces compared to that of the general population.">Relative risk is the risk a woman faces compared to that of the general population.</option>
				<option value="Having either first or second degree relatives with breast cancer increases a woman's risk.">Having either first or second degree relatives with breast cancer increases a woman's risk.</option>
				<option value="Because breast cancer in men is so rare, having a male relative with breast cancer is a very high risk factor.">Because breast cancer in men is so rare, having a male relative with breast cancer is a very high risk factor.</option>
				<option value="If woman has a family history of breast cancer it indicates she may have a BRCA mutation, which would increase her risk by about five times.">If woman has a family history of breast cancer it indicates she may have a BRCA mutation, which would increase her risk by about five times.</option>
				<option value="Risk can be measured as absolute risk, or the overall chance of a woman getting breast cancer, or relative risk, her risk compared to that of other women.">Risk can be measured as absolute risk, or the overall chance of a woman getting breast cancer, or relative risk, her risk compared to that of other women.</option>
				<option value="Having multiple family members with breast cancer can increase a woman's risk more than having just one family member with breast cancer.">Having multiple family members with breast cancer can increase a woman's risk more than having just one family member with breast cancer.</option>
				<option value="Five year risk is a measure of the chances that a woman will get breast cancer in the next five years.">Five year risk is a measure of the chances that a woman will get breast cancer in the next five years.</option>
				<option value="Even without any risk factors, a woman still has some risk, though it will be slightly lower than the base rate of 12.5%.">Even without any risk factors, a woman still has some risk, though it will be slightly lower than the base rate of 12.5%.</option>
				<option value="Over time the rate of breast cancer has remained relatively stable.">Over time the rate of breast cancer has remained relatively stable.</option>
				</select>
			<input name="submitmsgK" type="submit" id="submitmsgK" value="Enter" />


			<br><span>BC and Age</span><select name="feedbackL" id="feedbackL">
				<option value="Age is the biggest risk factor for breast cancer. Most women are over the age of 60 when they first get breast cancer.">Age is the biggest risk factor for breast cancer. Most women are over the age of 60 when they first get breast cancer.</option>
				<option value="Women of any age may develop breast cancer, but almost all women are over 60 years old when they develop breast cancer.">Women of any age may develop breast cancer, but almost all women are over 60 years old when they develop breast cancer.</option>
				<option value="The older a woman is, the more likely her cells are to be damaged, leading to increased risk of breast cancer.">The older a woman is, the more likely her cells are to be damaged, leading to increased risk of breast cancer.</option>
				<option value="The risk for a woman at a young age to develop breast cancer is very low.">The risk for a woman at a young age to develop breast cancer is very low.</option>
				<option value="Most cases of breast cancer before the age of 50 are due to genetic mutations.">Most cases of breast cancer before the age of 50 are due to genetic mutations.</option>
				</select>
			<input name="submitmsgL" type="submit" id="submitmsgL" value="Enter" />


			<br><span>Insurace / Privacy</span><select name="feedbackM" id="feedbackM">
				<option value="Some types of insurance, such as life insurance and long term care insurance, can take genetic information into account.">Some types of insurance, such as life insurance and long term care insurance, can take genetic information into account.</option>
				<option value="There are several laws put in place to protect a woman's health and genetic information, such as HIPPA and GINA.">There are several laws put in place to protect a woman's health and genetic information, such as HIPPA and GINA.</option>
				<option value="The GINA law helps protect people against genetic discrimination.">The GINA law helps protect people against genetic discrimination.</option>
				</select>
			<input name="submitmsgM" type="submit" id="submitmsgM" value="Enter" />



			<button name="submitmsg16" type="button" id="submitmsg16" value="Shallow 5 Min">Shallow 5 Min</button>
			<button name="submitmsg17" type="button" id="submitmsg17" value="Shallow 10 Min">Shallow 10 Min</button>
			<button name="submitmsg20" type="button" id="submitmsg20" value="Shallow Directions">Shallow Directions</button>
			<br>
			<button name="submitmsg18" type="button" id="submitmsg18" value="Deep 5 Min">Deep 5 Min</button>
			<button name="submitmsg19" type="button" id="submitmsg19" value="Deep 10 Min">Deep 10 Min</button>
			<button name="submitmsg21" type="button" id="submitmsg21" value="Deep Directions">Deep Directions</button>
			<br>
			<button name="submitmsg8" type="button" id="submitmsg8" value="Ask More">Ask More</button>
			<button name="submitmsg10" type="button" id="submitmsg10" value="Ask More 2">Ask More 2</button>
			<button name="submitmsg9" type="button" id="submitmsg9" value="Ask More 3">Ask More 3</button>
			<button name="submitmsg12" type="button" id="submitmsg12" value="Ask More 4">Ask More 4</button>
			<br>
			<button name="submitmsg11" type="button" id="submitmsg11" value="Can't Answer">Can't Answer</button>
			<button name="submitmsg14" type="button" id="submitmsg14" value="Can't Answer Still">Can't Answer Still</button>
			<br>
			<button name="submitmsg13" type="button" id="submitmsg13" value="Blank Entry">Blank Entry</button>
			<button name="submitmsg15" type="button" id="submitmsg15" value="Slow Response">Slow Response</button>
			<button name="submitmsg4" type="button" id="submitmsg4" value="Good work.">Participant is finished</button>
			<br>
			<button name="submitmsg22" type="button" id="submitmsg22" value="End A">End A</button>

			
		</form>

	</div>

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>

	<script type="text/javascript">

	 //jQuery Document

	$(document).ready(function(){

		//If the user submits the form

		$("#submittext").click(function(){

			var clientmsg = $("#textmsg").val();
			$.post("tutorlog2.php", {text: clientmsg});
			$("#textmsg").attr("value", "");
			unlock();
			return false;
		});
		
		$("#submitmsg").click(function(){	

			var clientmsg = $("#feedback").val();
			$.post("tutorlog2.php", {text: clientmsg});
			$("#feedback").attr("value", "");
			unlock();
			return false;

		});	

		$("#submitmsg2").click(function(){	

			var clientmsg = $("#feedback2").val();
			$.post("tutorlog2.php", {text: clientmsg});
			$("#feedback2").attr("value", "");
			unlock();
			return false;

		});	

		$("#submitmsg3").click(function(){	

			var clientmsg = $("#feedback3").val();
			$.post("tutorlog2.php", {text: clientmsg});
			$("#feedback3").attr("value", "");
			unlock();
			return false;

		});	

		$("#submitmsg4").click(function(){	

			$.post("tutorlog2.php", {text: "Good work. Please tell the experimenter that you are ready to continue with the next part of the experiment."});
			unlock();
			return false;

		});	

		$("#submitmsg22").click(function(){	

			$.post("tutorlog2.php", {text: "Good work. Please wait just a moment while I load the next part of the study."});
			unlock();
			advance();
			return false;

		});	

		$("#submitmsg8").click(function(){	

			$.post("tutorlog2.php", {text: "Can you think of some other questions to ask?"});
			unlock();
			return false;

		});	
	

		$("#submitmsg9").click(function(){	

			$.post("tutorlog2.php", {text: "Try to see if you can think of just a few more questions and then we'll move on."});
			unlock();
			return false;

		});	

		$("#submitmsg10").click(function(){	

			$.post("tutorlog2.php", {text: "Can you think of a few more questions to ask? We'll be done soon."});
			unlock();
			return false;

		});	

		$("#submitmsg12").click(function(){	

			$.post("tutorlog2.php", {text: "Can you think of just one more question to ask before we finish?"});
			unlock();
			return false;

		});

		$("#submitmsg13").click(function(){	

			$.post("tutorlog2.php", {text: "I'm sorry, I didn't get that question. What questions can you ask?"});
			unlock();
			return false;

		});

		$("#submitmsg14").click(function(){	

			$.post("tutorlog2.php", {text: "I'm sorry, I seem to be having trouble answering your questions. Can you try asking about something else?"});
			unlock();
			return false;

		});

		$("#submitmsg15").click(function(){	

			$.post("tutorlog2.php", {text: "Are you still there? What questions can you ask?"});
			unlock();
			return false;

		});

		$("#submitmsg16").click(function(){	

			$.post("tutorlog2.php", {text: "What other questions can you ask about reviewing information from the lesson?"});
			unlock();
			return false;

		});

		$("#submitmsg17").click(function(){	

			$.post("tutorlog2.php", {text: "What other questions can you ask about definitions or basic information from the lesson?"});
			unlock();
			return false;

		});

		$("#submitmsg18").click(function(){	

			$.post("tutorlog2.php", {text: "What other questions can you ask that connect all of the lesson material to the idea that some women are at increased genetic risk?"});
			unlock();
			return false;

		});

		$("#submitmsg19").click(function(){	

			$.post("tutorlog2.php", {text: "What other questions can you ask that relate the different pieces of information from the lesson to the concept of increased risk due to genetic mutations?"});
			unlock();
			return false;

		});

		$("#submitmsg20").click(function(){	

			$.post("tutorlog2.php", {text: "Can you ask some more questions that ask for definitions or ask about additional basic information? Questions that start with what or who work best."});
			unlock();
			return false;

		});

		$("#submitmsg21").click(function(){	

			$.post("tutorlog2.php", {text: "Can you ask some more questions that connect the processes involved in genetic risk? Questions that start with why or how work best."});
			unlock();
			return false;

		});

		$("#submitmsg11").click(function(){	

			$.post("tutorlog2.php", {text: "I'm sorry, I don't seem to have an answer for that question. What else can you ask?"});
			unlock();
			return false;

		});

		$("#submitmsg5").click(function(){	

			var clientmsg = $("#feedback5").val();
			$.post("tutorlog2.php", {text: clientmsg});
			$("#feedback5").attr("value", "");
			unlock();
			return false;

		});	
	
		$("#submitmsg6").click(function(){	

			var clientmsg = $("#feedback6").val();
			$.post("tutorlog2.php", {text: clientmsg});
			$("#feedback6").attr("value", "");
			unlock();
			return false;

		});	
	
		$("#submitmsg7").click(function(){	

			var clientmsg = $("#feedback7").val();
			$.post("tutorlog2.php", {text: clientmsg});
			$("#feedback7").attr("value", "");
			unlock();
			return false;

		});	


		$("#submitmsgA").click(function(){	

			var clientmsg = $("#feedbackA").val();
			$.post("tutorlog2.php", {text: clientmsg});
			$("#feedbackA").attr("value", "");
			unlock();
			return false;

		});

		$("#submitmsgB").click(function(){	

			var clientmsg = $("#feedbackB").val();
			$.post("tutorlog2.php", {text: clientmsg});
			$("#feedbackB").attr("value", "");
			unlock();
			return false;

		});

		$("#submitmsgC").click(function(){	

			var clientmsg = $("#feedbackC").val();
			$.post("tutorlog2.php", {text: clientmsg});
			$("#feedbackC").attr("value", "");
			unlock();
			return false;

		});

		$("#submitmsgD").click(function(){	

			var clientmsg = $("#feedbackD").val();
			$.post("tutorlog2.php", {text: clientmsg});
			$("#feedbackD").attr("value", "");
			unlock();
			return false;

		});

		$("#submitmsgE").click(function(){	

			var clientmsg = $("#feedbackE").val();
			$.post("tutorlog2.php", {text: clientmsg});
			$("#feedbackE").attr("value", "");
			unlock();
			return false;

		});

		$("#submitmsgF").click(function(){	

			var clientmsg = $("#feedbackF").val();
			$.post("tutorlog2.php", {text: clientmsg});
			$("#feedbackF").attr("value", "");
			unlock();
			return false;

		});

		$("#submitmsgG").click(function(){	

			var clientmsg = $("#feedbackG").val();
			$.post("tutorlog2.php", {text: clientmsg});
			$("#feedbackG").attr("value", "");
			unlock();
			return false;

		});

		$("#submitmsgH").click(function(){	

			var clientmsg = $("#feedbackH").val();
			$.post("tutorlog2.php", {text: clientmsg});
			$("#feedbackH").attr("value", "");
			unlock();
			return false;

		});

		$("#submitmsgI").click(function(){	

			var clientmsg = $("#feedbackI").val();
			$.post("tutorlog2.php", {text: clientmsg});
			$("#feedbackI").attr("value", "");
			unlock();
			return false;

		});

		$("#submitmsgJ").click(function(){	

			var clientmsg = $("#feedbackJ").val();
			$.post("tutorlog2.php", {text: clientmsg});
			$("#feedbackJ").attr("value", "");
			unlock();
			return false;

		});

		$("#submitmsgK").click(function(){	

			var clientmsg = $("#feedbackK").val();
			$.post("tutorlog2.php", {text: clientmsg});
			$("#feedbackK").attr("value", "");
			unlock();
			return false;

		});

		$("#submitmsgL").click(function(){	

			var clientmsg = $("#feedbackL").val();
			$.post("tutorlog2.php", {text: clientmsg});
			$("#feedbackL").attr("value", "");
			unlock();
			return false;

		});

		$("#submitmsgM").click(function(){	

			var clientmsg = $("#feedbackM").val();
			$.post("tutorlog2.php", {text: clientmsg});
			$("#feedbackM").attr("value", "");
			unlock();
			return false;

		});

	
		//Load the file containing the chat log
		function loadLog(){		
			var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height before the request
			$.ajax({
				url: "log/log2.html",
				cache: false,
				success: function(html){		
					$("#chatbox").html(html); //Insert chat log into the #chatbox div	
				
					//Auto-scroll			
					var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height after the request
					if(newscrollHeight > oldscrollHeight){
						$("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
					}				
			  	},
			});
		}


		function unlock(){

			$.post("unlock2.php");

		}

		function advance(){

			$.post("advance2.php");

		}
			
		setInterval (loadLog, 2500);	//Reload file every 2500 ms or x ms if you w
	});

	</script>

	<script type="text/javascript">

	 //jQuery Document

	$(document).ready(function(){

		//If the user wants to end session

		$("#exit").click(function(){
			var exit = confirm("Are you sure you want to end the session?");
			if(exit==true){window.location = 'index.php?logout=true';}
		});
	
	});

	</script>

	<?php
	//}
	?>

	<iframe height="184px" width="300px" scrolling="no" frameborder="0" src="http://ruwix.com/widget/stopwatch-gen/"></iframe> 

 </body>
</html>