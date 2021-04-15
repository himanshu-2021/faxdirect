<aside class="sidebar">
    <nav class="sidebar-nav">
       <ul class="metismenu" id="menu">

           <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-inbox"></i>  <span class="nav-label">Dashboard</span></a></li>
          <li>
             <a href="#"><i class="fa fa-phone"></i> <span class="nav-label">Communication</span><span class="fa arrow"></span></a>
             <ul class="nav nav-second-level collapse">
                <li><a href="Recents.php">Recents</a></li>
                <li><a href="Contacts.php">Contacts</a></li>
                 <li><a href="groups.php">Groups</a></li>
                 <li><a href="Blacklist.php">Blacklist</a></li>
             </ul>
          </li>

          <li>
             <a href="#"><i class="fa fa-archive"></i> <span class="nav-label">Archive</span><span class="fa arrow"></span></a>
             <ul class="nav nav-second-level collapse">
                <li><a href="inbox.php">Inbox</a></li>
                <li><a href="sent.php">Sent</a></li>
                 <li><a href="Outbox.php">Outbox</a></li>
                 <li><a href="spam.php">Spam</a></li>
                  <li><a href="trash.php">Trash</a></li>
             </ul>
          </li>
          <li><a href="Send-Fax.php"><i class="fa fa-fax"></i>  <span class="nav-label">Send Fax</span></a></li>



          <li>
             <a href="#"><i class="fa fa-archive"></i> <span class="nav-label">User name</span><span class="fa arrow"></span></a>
             <ul class="nav nav-second-level collapse">
                <li><a href="ChangePhoto.php">Change Photo</a></li>
                <li><a href="Profile.php"> Profile</a></li>
                <li><a href="addCredit.php">Add Credit: (Current: <span>$0</span>)</a></li>

                 <li><a href="userContacts.php">Contact Us</a></li>

             </ul>
          </li>
          <li><a href="{{route('user.logout')}}"><i class="fa fa-fax"></i>  <span class="nav-label">  Logout</span></a></li>


       </ul>
       <!-- END SIDEBAR MENU -->
       <!-- END SIDEBAR MENU -->
    </nav>
    <!-- END SIDEBAR -->
 </aside>
