 <!-- To Top Button Start -->
 <a href="#0" id="to-top" class="btn btn-to-top slide-up anim-no-delay">
     <i class="ph ph-arrow-up"></i>
 </a>
 <!-- To Top Button End -->

 <!-- Load Scripts Start -->
 <script src="{{ asset('assets/js/libs.min.js') }}"></script>
 <script src="{{ asset('assets/js/app.js') }}"></script>
 <!-- counters -->
 <script>
     const statsCounter1 = new countUp.CountUp("stats-counter-1", 90, optionsPlus);
     const statsCounter2 = new countUp.CountUp("stats-counter-2", 70, optionsPlus);
     statsCounter1.start();
     statsCounter2.start();
 </script>
 <!-- Load Scripts End -->

 <script>
     function toggleDropdown() {
         const menu = document.getElementById('userDropdownMenu');
         menu.classList.toggle('show');
     }

     // Close dropdown when clicking outside
     document.addEventListener('click', function(event) {
         const dropdown = document.querySelector('.user-dropdown');
         const menu = document.getElementById('userDropdownMenu');

         if (dropdown && !dropdown.contains(event.target)) {
             menu.classList.remove('show');
         }
     });

     function previewImage(input) {
         const preview = document.getElementById('preview');
         const file = input.files[0];

         if (file) {
             const reader = new FileReader();

             reader.onload = function(e) {
                 preview.src = e.target.result;
                 preview.style.display = 'block';
             }

             reader.readAsDataURL(file);
         } else {
             preview.style.display = 'none';
         }
     }
 </script>