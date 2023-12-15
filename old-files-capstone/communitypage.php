<link rel="stylesheet" href="css/communitypage.css">
<?php include "header.php" ?>
<?php include "navbar.php"?>
<script src="discussion_forum_script.js"></script>
<body>
<div class="container-fluid about-text about-section_2">
    <h1 class="title-2">COMMUNITY FORUM</h1>
</div>
<div class="container-md main-div">
<?php if (!isset($_SESSION['username'])) : ?>
    <div class="container-fluid" style="width: 85%; margin-bottom:10px; border:1px solid rgb(191,53,93)">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 d-flex align-items-center justify-content-center review review-header">
                <h1>LOGIN NOW TO PARTICIPATE IN THE FORUM</h1>
            </div>
        </div>
    </div>
<?php else : ?>
    <div class="container-fluid" style="width: 85%;">
        <div class="row justify-content-center">
            <div class="review d-flex p-3 review-text">
                <form name="frm" method="post" action="view.php">
                    <input type="hidden" id="commentid" name="Pcommentid" value="0">
                    <div class="mb-3">
                        <h1 class="post-txt" style="font-size: 46px; font-weight:bold">CREATE A POST</h1>
                        <label for="postTitle" class="form-label post-txt">Title</label>
                        <input type="text" class="form-control shadow-none reply-txt comment-box" id="title" name="title" required placeholder="What is your post about?" maxlength="100">
                    </div>
                    <div class="mb-3">
                        <label for="categorySelect" id="category" class="form-label post-txt">Select Category</label>
                        <select class="form-select shadow-none comment-box reply-txt bg-dark" id="categorySelect" name="category" required>
                            <option value="general_discussion" selected>General Discussion</option>
                            <option value="feedbacks">Feedbacks</option>
                            <option value="off_topic">Off Topic</option>
                            <option value="reported_bugs">Reported Bugs</option>
                            <option value="mental_health">Mental Health</option>
                            <!-- Add more categories as needed -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="postContent" class="form-label post-txt">Text</label>
                        <textarea class="form-control shadow-none comment-box reply-txt" id="postContent" rows="5" name="msg" required placeholder="Speak your Mind" maxlength=500></textarea>
                    </div>
                    <input type="button" id="post-button" class="post-button" value="POST"></input>
                </form>
            </div>
        </div>
    </div>
<?php endif; ?>
<div class="container-fluid" style="width: 85%; margin-bottom: 10px; border: 1px solid rgb(191,53,93); padding:10px; background-color: #1A1D20">
    <div class="row d-flex" style="flex-direction: row;">
        <div class="col-md-6">
            <form>
                <label for="categorySelect2" id="category" class="form-label post-txt">Select Category</label>
                <select class="form-select shadow-none comment-box reply-txt bg-dark" id="categorySelect2"
                    name="category" required>
                    <option value="general_discussion" selected>General Discussion</option>
                    <option value="feedbacks">Feedbacks</option>
                    <option value="off_topic">Off Topic</option>
                    <option value="reported_bugs">Reported Bugs</option>
                    <option value="mental_health">Mental Health</option>
                    <!-- Add more categories as needed -->
                </select>
            </form>
        </div>
        <div class="col-md-6 d-flex align-items-center justify-content-center post-txt">
            <!-- Content of the second column goes here -->
            <label for="textCategory"class="form-label post-txt">Current Category:&nbsp;&nbsp;</label>
            <h1 id="textCategory" style="color:rgb(191,53,93);">Value here</h1>
        </div>
    </div>
</div>
  <div class="row justify-content-center"> 
    <div class="container" id="commentsContainer">
      <!-- The JavaScript will populate the comments here -->
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row d-flex flex-column">
    <div class="TheQuote col-md-6 mx-auto text-center" style="color: white;">
        <img src="images/FirstQuoteLisa.png" alt="FirstQuote" class="img-fluid">			
    </div>
    <div class="HealthyMindText col-md-6">
      <img src="images/HealthyMindText.png" alt="FirstQuote" class="img-fluid">
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row d-flex flex-column post-txt" style="background-color: rgba(0, 0, 0, 0.553); padding:20px">
  <div class="links col-md-3">
		<a href="https://mentalhealthph.org" target="_blank" >https://mentalhealthph.org</a>
	</div>
	<div class="links col-md-3">
		<a href="https://www.helpguide.org/" target="_blank" >https://www.helpguide.org/</a>
	</div>
	<div class="links col-md-3">
		<a href="https://ncmh.gov.ph/index.php/online-services" target="_blank" >https://ncmh.gov.ph/index.php/online-services</a>
	</div>
	<div class="links col-md-3">
		<a href="https://pghopd.up.edu.ph/" target="_blank" >https://pghopd.up.edu.ph/</a>
	</div>
	<div class="links col-md-3">
		<a href="https://www.pmha.org.ph" target="_blank">https://www.pmha.org.ph</a>
	</div>
  </div>
</div>
<?php include "footer.php"?>
</body>
<script>
  // Get all reply buttons and reply forms
  const replyButtons = document.querySelectorAll('.reply-button');
  const replyForms = document.querySelectorAll('.reply-form');
  // Add click event listener to each reply button
  replyButtons.forEach((button, index) => {
    button.addEventListener('click', () => {
      console.log("dasdasd")
      // Toggle the display property of the corresponding reply form
      if (replyForms[index].style.display === 'none') {
        replyForms[index].style.display = 'block';
      } else {
        replyForms[index].style.display = 'none';
      }
    });
  });
  function updateSelectedCategory() {
        var selectedCategory = $('#categorySelect2').val();
        switch(selectedCategory){
          case "general_discussion":
            selectedCategory = "General Discussion";
            break;
          case "feedbacks":
          selectedCategory = "Feedbacks";
          break;
          case "off_topic":
          selectedCategory = "Off Topic";
          break;
          case "mental_health":
          selectedCategory = "Mental Health";
          break;
          case "reported_bugs":
          selectedCategory = "Reported Bugs";
          break;
        }
        $('#textCategory').text(selectedCategory);
    }

    // Call the function when the page loads to set the initial value
    $(document).ready(function () {
        updateSelectedCategory();

        // Call the function whenever the value of the <select> changes
        $('#categorySelect2').change(function () {
            updateSelectedCategory();
        });
    });
</script>