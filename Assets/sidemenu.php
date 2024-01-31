 <div class="sidemenubar">
     <div class="sm_head">
         <p>Kalvi Saalai</p>
     </div>
     <div class="sm_list">
         <ul>
             <li><a href="#">Dashboard</a></li>
             <li><a href="#">Students</a></li>
             <li><a href="#">Attenance</a></li>
             <li><a href="#">Notice</a></li>
             <li><a href="#">Report</a></li>
         </ul>
     </div>
     <div class="sm_foot">
         <div class="sm_footer">
             <div class="name">
                 <p class="hi">Hi,</p>
                 <p class="sm_foot_name">Surya</p>
             </div>
             <div class="icon">
                 <i class="bi bi-box-arrow-left"></i>
             </div>
         </div>
     </div>
 </div>
 <style>
     .sidemenubar {
         background-color: var(--blue);
         height: 100vh;
         width: 220px;
         position: relative;
         display: flex;
         flex-direction: column;
         justify-content: space-between;
     }

     .sm_head {
         padding: 12px 0;
         display: flex;
         justify-content: center;
         align-items: center;
         flex-direction: column;
     }

     .sm_head p {
         font-size: 24px;
         color: var(--grey);
     }

     .sm_list {
         margin: 10px 0 0 0;
     }

     .sm_list ul li {
         height: 40px;
         padding: 0 20px 0;
         display: flex;
         align-items: center;
         cursor: pointer;
         margin: 10px 0;
     }

     .sm_list ul li a:hover {
         background-color: var(--white);
         color: var(--blue);
         box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px,
             rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px,
             rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px,
             rgba(0, 0, 0, 0.07) 0px 32px 64px;
     }

     .sm_list ul li a {
         text-decoration: none;
         color: var(--white);
         width: 100%;
         padding: 10px 18px;
         border-radius: 15px;
     }

     .sm_foot {
         margin: 10px 0;
         padding: 5px 20px;
     }

     .sm_footer {
         box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px,
             rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px,
             rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px,
             rgba(0, 0, 0, 0.07) 0px 32px 64px;
         background-color: var(--white);
         border-radius: 15px;
         display: flex;
         justify-content: space-between;
     }

     .sm_footer {
         height: 50px;
         padding: 8px;
     }

     .sm_footer .hi {
         font-size: 12px;
     }

     .sm_foot_name {
         font-size: 18px;
         color: var(--blue);
         font-weight: 600;
     }

     .sm_footer .icon {
         padding: 8px;
         font-size: 24px;
     }
 </style>