function sliderFour(p,event){
    // event.preventDefault();
    
     if(p !== "4"){
      return true;
    }
    // e.preventDefault()
    //Verification of other slides 
    
    let slideOne = sliderOne(event.target.id)
    let slideTwo = sliderTwo(event.target.id) ;
    let slideThree = sliderThree(event.target.id);
    
    if(!slideOne || !slideTwo || !slideThree){
      // Reset your slider here 
     event.preventDefault()
      return ;
    }
    
    let verify1 = false ; let verify2 = false ;
    // Radio buttons 
    const q4a0 = document.getElementsByName("q4a")[0]
    const q4a1 = document.getElementsByName("q4a")[1]
    
    
    if (
        (q4a0.checked && !q4a1.checked) || 
        (!q4a0.checked && q4a1.checked)
    ){
      // console.log("verified 2 ");
      verify1 = true ;
    }
    
    // Check Box
   const term =  document.getElementById("terms_and_conditions");
    if(term.checked){
      verify2 = true ;
    }
    let verify = false ;
    if(verify1 && verify2){
      verify = true;
    }
    if(!verify){
      event.preventDefault()
      alert("please fill all the crdentials");
    }else{
      // event.submit()
    }
    
    return verify ;
  }
  // submit function for form 
  function formSubmit(event){
    sliderFour("4",event)
  }
  
  function q2bYClick (){
    document.getElementById("q2bN").checked = false ;
    document.getElementById("q2bY").checked = true ;
  }
  function q2bNClick (){
    document.getElementById("q2bN").checked = true ;
    document.getElementById("q2bY").checked = false;
  }
  function sliderOne(p){
    
    if(p !== "1"){
      return true;
    }
    // slider one 
    const c1 = document.getElementById("c1") ;
    const c2 = document.getElementById("c2") ;
    // console.log(c1.checked);
    // console.log(c2.checked);
    
    // checked attribute will return true if checked or false if not
    
    if(!c1.checked || !c2.checked){
      
      // '||' means 'or'
      // !c1.checked mean if c1.checked is false 
      // ! means not
      // c1.checked mean if c1.checked is true
      alert("please Input all the value correctly") ;
      // now stop the .next click function here ;
      return false ;
    }
    return true ;
  }
  function sliderTwo(p) {
    if(p !== "2"){
      return true;
    }
    let verify1 = false ;
    let verify2 = false ;
    let verify3 = false ;
    let verify4 = false ;
    let verify5 = false ;
    // console.log('working') ;
    const s2t1 = document.getElementById("s2t1") ;
    // console.log(typeof s2t1.value);
    if (typeof s2t1.value === "string" && 
        s2t1.value !== ""
       ){
      // console.log("verfied 1") ;
      verify1 = true ;
    }else{
      // console.log("Not Verified 1")
    }
    
    //check box
    
    const q2bY = document.getElementById("q2bY") ;
    const q2bN = document.getElementById("q2bN") ;
    
    if (
        (q2bY.checked && !q2bN.checked) || 
        (!q2bY.checked && q2bN.checked)
    ){
      // console.log("verified 2 ");
      verify2 = true ;
    }else {
      // console.log("Not verified 2 ");
    }
    
    // Option 
    
    const q2c = document.getElementById("q2c") ;
    
    let optionsArray = [] ;
    var options = q2c.options;
  for (let i = 0; i < options.length; i++) { 
    optionsArray.push(options[i].value) ;
    // console.log(options[i].value);//log the value
  }
    // console.log(optionsArray);
    
    if(optionsArray.includes(q2c.value) && q2c.value !== ""){
      // console.log("verified3");
      verify3 = true ;
    }
    else{
      // console.log("Not verified3");
    }
    
    
    
    // Text Area 
    
    const s2te1 = document.getElementById("s2t1") ;
    console.log(s2te1.value);
    
    if (typeof s2te1.value === "string" && 
        s2te1.value.trim !== ""
       ){
      // console.log("verfied 4") ;
      verify4 = true ;
    }else{
      // console.log("Not Verified 4")
    }
    
    // Date 
    
    const s2d1 = document.getElementById("s2d1") ;
    if (typeof s2d1.value === "string" && 
        s2d1.value !== ""
       ){
      // console.log("verfied 5") ;
      verify5 = true ;
    }else{
      // console.log("Not Verified 5")
    }
    let  verify = false ;
    if( verify1 && verify2 && verify3 && verify4 && verify5 ){
      verify = true ;
    }
    if(!verify){
      alert("Please fill all required fields");
    }
    return verify;
  }
  
  function sliderThree (p){
     if(p !== "3"){
      return true;
    }
    var email_validator_regex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
     const s3e1 = document.getElementById("s3e1") ;
    let verify = false ;
    if(s3e1.value.match(email_validator_regex)){
      verify = true ;
    }
    if(!verify){
      alert("Please enter valid email")
    }
    
    return verify ;
  }
  
  $(function() {
  
  var current_fs, next_fs, previous_fs; 
  var left, opacity, scale; 
  var animating; 
  $(".next").click(function(event){
    // Start of Editing Editing 
    // alert(event.target.id);
    
    // slider two 
    let slideOne = sliderOne(event.target.id)
    let slideTwo = sliderTwo(event.target.id) ;
    let slideThree = sliderThree(event.target.id);
    
    if(!slideOne || !slideTwo || !slideThree){
      return ;
    }
    
    // End of Editing 
      if(animating) return false;
      animating = true;
      
      current_fs = $(this).parent();
      next_fs = $(this).parent().next();
      $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
      next_fs.show(); 
      current_fs.animate({opacity: 0}, {
          step: function(now, mx) {
              scale = 1 - (1 - now) * 0.2;
              left = (now * 50)+"%";
              opacity = 1 - now;
              current_fs.css({'transform': 'scale('+scale+')'});
              next_fs.css({'left': left, 'opacity': opacity});
          }, 
          duration: 1000, 
          complete: function(){
              current_fs.hide();
              animating = false;
          }, 
          easing: 'easeInOutBack'
      });
  });
  
  $(".previous").click(function(){
      if(animating) return false;
      animating = true;
      
      current_fs = $(this).parent();
      previous_fs = $(this).parent().prev();
      $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
      previous_fs.show(); 
      current_fs.animate({opacity: 0}, {
          step: function(now, mx) {
              scale = 0.8 + (1 - now) * 0.2;
              left = ((1-now) * 50)+"%";
              opacity = 1 - now;
              current_fs.css({'left': left});
              previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
          }, 
          duration: 1000, 
          complete: function(){
              current_fs.hide();
              animating = false;
          }, 
          easing: 'easeInOutBack'
      });
  });
  
  $(".submit").click(function(){
      
      $("#msform").submit();
  })
  
  });