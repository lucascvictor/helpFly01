
  <script src="https://cdnfly01.azureedge.net/fly/1.0.2/fly01ui.js"></script>
  <script src="{{ url('js/fly-tour.js') }}"></script>
  <script src="{{ url('js/enjoyhint.js') }}"></script>



 <script src="https://cdnfly01.azureedge.net/fly/1.0.3/fly01ui.js"></script>



  <script type="text/javascript">
  $(".button-collapse").sideNav();
  </script>



 <script>
		//initialize instance
var enjoyhint_instance = new EnjoyHint({});

//simple config. 
//Only one step - highlighting(with description) "New" button 
//hide EnjoyHint after a click on the button.
var enjoyhint_script_steps = [
  {
    'click .new_btn' : 'Click the "New" button to start creating your project'
  }  
];

//set script config
enjoyhint_instance.set(enjoyhint_script_steps);

//run Enjoyhint script
enjoyhint_instance.run();

 </script>
