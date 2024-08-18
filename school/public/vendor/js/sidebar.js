 
    let arrow = $(".arrow");
    for (var i = 0; i < arrow.length; i++) {
      arrow[i].addEventListener('click', (e)=>{
    let arrowParent = e.target.parentElement.parentElement;
        arrowParent.classList.toggle("showMenu");
        
      });
    }

    $(document).ready(function() {
      let sidebar = $(".sidebar");
      let sidebarBtn = $(".fa-list");

      sidebarBtn.click(function() {
        sidebar.toggleClass("close");

        if($('.sidebar').hasClass('close')){
            console.log('true');
            $('#body').css('margin-left','60px');
        }else{
            console.log('false');
            $('#body').css('margin-left','250px');
        }
      });
    });
  