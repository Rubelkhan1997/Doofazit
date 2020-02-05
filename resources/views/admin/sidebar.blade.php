<div class="app-sidebar sidebar-shadow bg-royal sidebar-text-light">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
          <ul class="vertical-nav-menu">
              <li class="app-sidebar__heading">Sales</li>
              <li class="mm-active" >
                  <router-link to="/product@sales">
                      <i class="metismenu-icon pe-7s-angle-right"></i>
                      Product Sales
                  </router-link>
              </li>
              <!--Product Report Start-->
              <li>
                  <a href="#" id="icon1">
                      <i class="metismenu-icon pe-7s-browser"></i>
                      Product Report
                      <i class="flaticon-add one"></i>
                  </a>
                  <ul>
                      <li class="block-element-btn-example-1">
                          <router-link to="/sales@price">
                              <i class="metismenu-icon"></i>
                              Sales Price
                          </router-link>
                      </li>
                      <li class="block-element-btn-example-1">
                          <router-link to="/discount@price">
                              <i class="metismenu-icon">
                              </i>Discount Price
                          </router-link>
                      </li>
                      <li class="block-element-btn-example-1">
                          <router-link to="/discountwish@price">
                              <i class="metismenu-icon">
                              </i>Discount Wise product
                          </router-link>
                      </li>
                      <li class="block-element-btn-example-1">
                          <router-link to="/product@shortage">
                              <i class="metismenu-icon">
                              </i>Product Shortage
                          </router-link>
                      </li>
                      <li class="block-element-btn-example-1">
                          <router-link to="/return@product">
                              <i class="metismenu-icon">
                              </i>Return product
                          </router-link>
                      </li>
                      <li class="block-element-btn-example-1">
                          <router-link to="/damage@product">
                              <i class="metismenu-icon">
                              </i>Damage Product
                          </router-link>
                      </li>
                      <li class="block-element-btn-example-1">
                          <router-link to="/dataexpaired@product">
                              <i class="metismenu-icon">
                              </i>Date Expaired Product
                          </router-link>
                      </li>
                      <li class="block-element-btn-example-1">
                          <router-link to="/dataexpaired@notification">
                              <i class="metismenu-icon">
                              </i>Date Expaired Notification
                          </router-link>
                      </li>
                  </ul>
              </li>

              <li >
                 <a href="#" id="icon2">
                     <i class="metismenu-icon pe-7s-plugin"></i>
                     Sales Report
                     <i class="flaticon-add two"></i>
                 </a>
                 <ul>
                     <li>
                         <router-link to="/todaycash@sales">
                             <i class="metismenu-icon">
                             </i>Today Cash Sales
                         </router-link>
                     </li>
                     <li>
                         <router-link to="/todaydue@sales">
                             <i class="metismenu-icon">
                             </i>Today Due Sales
                         </router-link>
                     </li>
                     <li>
                         <router-link to="/todaycash@receive">
                             <i class="metismenu-icon">
                             </i>Today Cash Receive
                         </router-link>
                     </li>
                     <li>
                         <router-link to="/today@discount">
                             <i class="metismenu-icon">
                             </i>Today Discount
                         </router-link>
                     </li>
                     <li>
                         <router-link to="/total@due">
                             <i class="metismenu-icon">
                             </i>Total Due
                         </router-link>
                     </li>
                     <li>
                         <router-link to="/total@sales">
                             <i class="metismenu-icon">
                             </i>Total Sales
                         </router-link>
                     </li>
                     <li>
                         <router-link to="/total@receive">
                             <i class="metismenu-icon">
                             </i>Total Receive
                         </router-link>
                     </li>
                     <li>
                         <router-link to="/total@discount">
                             <i class="metismenu-icon">
                             </i>Total Discount
                         </router-link>
                     </li>

                     <li>
                         <router-link to="/fixedcustomer@list">
                             <i class="metismenu-icon">
                             </i>Fixed Customer List
                         </router-link>
                     </li>
                     <li>
                         <router-link to="/localcustomer@list">
                             <i class="metismenu-icon">
                             </i>Local Customer List
                         </router-link>
                     </li>
                     <li>
                         <router-link to="/profit@loss">
                             <i class="metismenu-icon">
                             </i>Profit & Loss
                         </router-link>
                     </li>
                     <li>
                         <router-link to="/sale@discount">
                             <i class="metismenu-icon">
                             </i>Sales & Discount
                         </router-link>
                     </li>
                     <li>
                         <router-link to="/gift@item">
                             <i class="metismenu-icon">
                             </i>Gift Item
                         </router-link>
                     </li>
                     <li>
                         <router-link to="/balance@sheet">
                             <i class="metismenu-icon">
                             </i>Balance Sheet
                         </router-link>
                     </li>
                     <li>
                         <router-link to="/sale@vouchar">
                             <i class="metismenu-icon">
                             </i>Sales Vouchar
                         </router-link>
                     </li>

                     <li>
                         <router-link to="/sale@return">
                             <i class="metismenu-icon">
                             </i>Sales Retarn
                         </router-link>
                     </li>
                     <li>
                         <router-link to="/customer@statement">
                             <i class="metismenu-icon">
                             </i>Customer Statement
                         </router-link>
                     </li>
                 </ul>
             </li>
           </ul>
         </div>

     <!--Purchase End-->
   <!--Purches Start-->

    <div class="app-sidebar__inner">
        <ul class="vertical-nav-menu">
            <li class="app-sidebar__heading">Purchase</li>
            <li>
              <a href="#" id="icon3">
                  <i class="metismenu-icon pe-7s-rocket"></i>
                  Purchase
                <i class="flaticon-add three"></i>
              </a>
           <ul>
             <li>
               <router-link to="/brand@entry">
                 <i class="metismenu-icon"></i>
                 Brand Entry
               </router-link>

             </li>
            <li>
                <router-link to="/purchase@entry">
                    <i class="metismenu-icon">
                    </i>Purchase Entry
                </router-link>
            </li>

            <li>
                <router-link to="/supplier@entry">
                    <i class="metismenu-icon">
                    </i>Supplier Entry
                </router-link>
            </li>
            </ul>

        </li>

        <!--Test T-->
        <li >
          <a href="#" id="icon4">
              <i class="metismenu-icon pe-7s-rocket"></i>
              Purchase Report
              <i class="flaticon-add four"></i>
          </a>
          <ul>
            <li>
                <router-link to="/allsupplier@list">
                    <i class="metismenu-icon">
                    </i>All Supplier List
                </router-link>
            </li>

              <li>
                  <router-link to="/localsupplier@list">
                      <i class="metismenu-icon">
                      </i>Local Supplier List
                  </router-link>
              </li>
              <li>
                  <router-link to="/forensupplier@list">
                      <i class="metismenu-icon">
                      </i>Foren Supplier List
                  </router-link>
              </li>
              <li>
                  <router-link to="/duesupplier@list">
                      <i class="metismenu-icon">
                      </i>Due Supplyer List
                  </router-link>
              </li>
                <li>
                    <router-link to="/supplier@payment">
                        <i class="metismenu-icon">
                        </i>Supplier Payment
                    </router-link>
                </li>
                <li>
                  <router-link to="/purchase@return">
                      <i class="metismenu-icon"></i>
                      Purchase Return
                  </router-link>

                </li>
                <li>
                    <router-link to="/purchase@price">
                        <i class="metismenu-icon"></i>
                        Purchase Price
                    </router-link>
                </li>
                <li>
                    <router-link to="/purchasebalance@sheet">
                        <i class="metismenu-icon"></i>
                        Purchase Balance Sheet
                    </router-link>
                </li>
                <li>
                    <router-link to="/purchaserate@graphs">
                        <i class="metismenu-icon"></i>
                        Purchase Rate Graphs
                    </router-link>
                </li>
                <li>
                      <router-link to="/latestpurchase@item" >
                          <i class="metismenu-icon"></i>
                          Last 100 Purchase Item
                      </router-link>
                  </li>
                  <li>
                      <router-link to="/purchase@invoice">
                          <i class="metismenu-icon"></i>
                          Purchase Invoice
                        </router-link>
                    </li>

              </ul>
            </li>
            </ul>
        </div>

            <!--Purches End-->

        <!--Inventory Start-->

    <div class="app-sidebar__inner">
      <ul class="vertical-nav-menu">
          <li class="app-sidebar__heading">Inventory</li>
            <li>
              <a href="#" id="icon5">
                  <i class="metismenu-icon pe-7s-rocket"></i>
                  Inventory
                  <i class="flaticon-add five"></i>
              </a>
              <ul >
                  <li>
                      <router-link to="/category">
                          <i class="metismenu-icon">
                          </i>Category
                      </router-link>
                  </li>
                  <li>
                      <router-link to="/category@sub">
                          <i class="metismenu-icon">
                          </i>Sub Category
                      </router-link>
                  </li>
                  <li>
                      <router-link to="/category@third">
                          <i class="metismenu-icon">
                          </i>Third Category
                      </router-link>
                  </li>
                  <li  >
                      <router-link to="/category@forth">
                          <i class="metismenu-icon"></i>
                          Forth Category
                      </router-link>
                  </li>
                  <li>
                      <router-link to="/category@five">
                          <i class="metismenu-icon"></i>
                          5th Category
                      </router-link>
                  </li>
                  <li>
                      <router-link to="/productcode@entry">
                          <i class="metismenu-icon"></i>
                          Product Code Entry
                      </router-link>
                  </li>
                  <li>
                      <a href="#">
                          <i class="metismenu-icon"></i>
                          QR Code Entry
                      </a>
                  </li>
              </ul>
          </li>

          <li >
              <a href="#" id="icon6">
                  <i class="metismenu-icon pe-7s-rocket"></i>
                  Inventory Report
                  <i class="flaticon-add six"></i>
              </a>
              <ul>
                  <li>
                      <a href="#" >
                          <i class="metismenu-icon">
                          </i>Stock Summary
                      </a>
                  </li>
                  <li>
                      <router-link to="/stockreport@amount">
                          <i class="metismenu-icon">
                          </i>Stock Report With Amount
                      </router-link>
                  </li>
                  <li>
                      <a href="#">
                          <i class="metismenu-icon">
                          </i>Stock Shortage List
                      </a>
                  </li>

                  <li>
                      <a href="#">
                          <i class="metismenu-icon"></i>
                          Category Report
                      </a>
                  </li>
              </ul>
          </li>

          <li >
              <a href="#" id="icon7">
                  <i class="metismenu-icon pe-7s-rocket"></i>
                  Inventory shortage
                  <i class="flaticon-add seven"></i>
              </a>
              <ul  >
                <li>
                  <router-link to="/brandwise@shortage">
                    <i class="metismenu-icon">
                    </i>Brand Wise Shortage
                  </router-link>
                </li>
                <li>
                  <router-link to="/brandwisestorcke@shortage">
                    <i class="metismenu-icon">
                    </i>Brand Wise Storcke Shortage
                  </router-link>
                </li>
                  <li>
                      <router-link to="/codewise@shortage" >
                          <i class="metismenu-icon">
                          </i>Code Wise Shortage
                      </router-link>
                  </li>
                  <li>
                      <router-link to="/companywise@shortage">
                          <i class="metismenu-icon">
                          </i>Company Wise Shortage
                      </router-link>
                  </li>
                  <li>
                      <router-link to="/supplierwise@shortage">
                          <i class="metismenu-icon"></i>
                          Supplier Wise Shortage
                      </router-link>
                  </li>

              </ul>
          </li>
        </ul>
      </div>

      <!--Inventory End-->
      <!--Accounting Start-->

    <div class="app-sidebar__inner">
        <ul class="vertical-nav-menu">
            <li class="app-sidebar__heading">Accounting</li>
            <li >
                <a href="#" id="icon8">
                    <i class="metismenu-icon pe-7s-rocket"></i>
                    Accounting
                    <i class="flaticon-add eight"></i>
                </a>
                <ul>
                  <li>
                      <a href="#" >
                          <i class="metismenu-icon">
                          </i>Voucher Entry
                      </a>
                  </li>
                  <li>
                      <a href="#">
                          <i class="metismenu-icon">
                          </i>Bank Statement
                      </a>
                  </li>
                  <li>
                      <a href="#">
                          <i class="metismenu-icon">
                          </i>Income Summary
                      </a>
                  </li>
                  <li>
                      <a href="#">
                          <i class="metismenu-icon"></i>
                          Expence Summary
                      </a>

                  </li>
                  <li>
                      <a href="#">
                          <i class="metismenu-icon"></i>
                          Privace Summary
                      </a>
                  </li>
                  <li>
                      <a href="#">
                          <i class="metismenu-icon"></i>
                          Payment Summary
                      </a>
                  </li>
                  <li>
                      <a href="#">
                          <i class="metismenu-icon"></i>
                          Received & Payment Summary
                      </a>
                  </li>
                  <li>
                      <a href="#">
                          <i class="metismenu-icon"></i>
                          Income Statement
                      </a>
                  </li>
                  <li>
                      <a href="#">
                          <i class="metismenu-icon"></i>
                          Balance Sheet
                      </a>
                  </li>
                  <li>
                      <a href="#">
                          <i class="metismenu-icon"></i>
                          Cash Book
                      </a>
                  </li>
                  <li>
                      <a href="#">
                          <i class="metismenu-icon"></i>
                          Bank Ladger
                      </a>
                  </li>
                  <li>
                      <a href="#">
                          <i class="metismenu-icon"></i>
                          Customer Ladger
                      </a>
                  </li>
                  <li>
                      <a href="#">
                          <i class="metismenu-icon"></i>
                          Supplier Ladger
                      </a>
                  </li>
                  <li>
                      <a href="#">
                          <i class="metismenu-icon"></i>
                          Low Ladger
                      </a>
                  </li>
                  <li>
                      <a href="#">
                          <i class="metismenu-icon"></i>
                          Expence Ladger
                      </a>
                  </li>
                    <li>
                        <a href="#">
                            <i class="metismenu-icon"></i>
                            Triel Balance
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="metismenu-icon"></i>
                            Bank Reconclliation Statement
                        </a>
                    </li>
                </ul>
            </li>
          </ul>
       </div>
  <!--Accounting End-->
  <!--HR Start-->

   <div class="app-sidebar__inner">
       <ul class="vertical-nav-menu">
           <li class="app-sidebar__heading">HR Management</li>
             <li >
               <a href="#" id="icon9">
                   <i class="metismenu-icon pe-7s-rocket"></i>
                   HR Management
                   <i class="flaticon-add nine"></i>
               </a>
                 <ul>
                     <li>
                         <router-link to="/employee@entry">
                             <i class="metismenu-icon">
                             </i>Employee Entry
                         </router-link>
                     </li>
                     <li>
                       <router-link to="/employeesuspend@entry">
                         <i class="metismenu-icon"></i>
                         Employee Suspend Entry
                       </router-link>
                     </li>
                     <li>
                       <router-link to="/grade@entry">
                         <i class="metismenu-icon">
                         </i>Grade Entry
                       </router-link>
                     </li>
                     <li>
                       <router-link to="/holiday@entry">
                         <i class="metismenu-icon"></i>
                         Holiday Entry
                       </router-link>
                     </li>
                     <li>
                         <router-link to="/leave@entry">
                             <i class="metismenu-icon">
                             </i>Leave Entry
                         </router-link>
                     </li>
                     <li>
                       <router-link to="/jobdepartment@entry">
                         <i class="metismenu-icon"></i>
                         Job Department Entry
                       </router-link>
                     </li>
                     <li>
                         <router-link to="/salaryincrement@entry">
                             <i class="metismenu-icon"></i>
                             Salary Increment Entry
                         </router-link>
                     </li>
                   </ul>
                 </li>

                   <li>
                       <a href="#" id="icon10">
                           <i class="metismenu-icon pe-7s-rocket"></i>
                           HR Report
                           <i class="flaticon-add ten"></i>
                       </a>
                       <ul>
                           <li>
                               <a href="#" >
                                   <i class="metismenu-icon">
                                   </i>Employee List
                               </a>
                           </li>
                           <li>
                               <a href="#">
                                   <i class="metismenu-icon">
                                   </i>Salary Sheet
                               </a>
                           </li>
                           <li>
                               <a href="#">
                                   <i class="metismenu-icon">
                                   </i>Leave Report
                               </a>
                           </li>
                           <li>
                               <a href="#">
                                   <i class="metismenu-icon"></i>
                                   Attendance Report
                               </a>

                           </li>
                           <li>
                               <a href="#">
                                   <i class="metismenu-icon"></i>
                                   Payslip
                               </a>
                           </li>
                           <li>
                               <a href="#">
                                   <i class="metismenu-icon"></i>
                                   Employe Statement
                               </a>
                           </li>
                           <li>
                               <a href="#">
                                   <i class="metismenu-icon"></i>
                                   Bonus Report
                               </a>
                           </li>
                           <li>
                               <a href="#">
                                   <i class="metismenu-icon"></i>
                                   Yearly Leave Calendar
                               </a>
                           </li>
                           <li>
                               <a href="#">
                                   <i class="metismenu-icon"></i>
                                   Pay Grade List
                               </a>
                           </li>
                           <li>
                               <a href="#">
                                   <i class="metismenu-icon"></i>
                                   Salary Due List
                               </a>
                           </li>
                       </ul>
                   </li>
               </ul>
            </div>
          <!--HR End-->

       <!--Asset Start-->

         <div class="app-sidebar__inner">
             <ul class="vertical-nav-menu">
                 <li class="app-sidebar__heading">Asset</li>
                  <li >
                       <a href="#" id="icon11">
                           <i class="metismenu-icon pe-7s-rocket"></i>
                           Asset
                          <i class="flaticon-add eleven"></i>
                       </a>
                       <ul>
                           <li>
                               <router-link to="/asset@entry">
                                   <i class="metismenu-icon">
                                   </i>Asset Entry
                               </router-link>
                           </li>
                           <li>
                             <router-link to="/assetbrand@entry">
                               <i class="metismenu-icon">
                               </i>Asset Brand Entry
                             </router-link>
                           </li>
                           <li>
                             <router-link to="/assetcategory@entry">
                               <i class="metismenu-icon">
                               </i>Asset Category Entry
                             </router-link>
                           </li>
                           <li>
                             <router-link to="/assetcode@entry">
                               <i class="metismenu-icon">
                               </i>Asset Code Entry
                             </router-link>
                           </li>
                           <li>
                               <router-link to="/assetsupplier@entry" >
                                   <i class="metismenu-icon">
                                   </i>Asset Supplier Entry
                               </router-link>
                           </li>
                       </ul>
                   </li>

                   <li >
                       <a href="#" id="icon12">
                           <i class="metismenu-icon pe-7s-rocket"></i>
                           Asset Code List
                           <i class="flaticon-add twelve"></i>
                       </a>
                       <ul>
                           <li>
                               <router-link to="/assetsupplier@list" >
                                   <i class="metismenu-icon">
                                   </i>Asset Supplier List
                               </router-link>
                           </li>
                           <li>
                               <router-link to="/assetsupplier@information">
                                   <i class="metismenu-icon">
                                   </i>Asset Supplier Information
                               </router-link>
                           </li>

                           <li>
                               <router-link to="/assetcategory@list">
                                   <i class="metismenu-icon">
                                   </i>Asset Category List
                               </router-link>
                           </li>
                           <li>
                               <router-link to="/assetbrand@list">
                                   <i class="metismenu-icon">
                                   </i>Asset Brand List
                               </router-link>
                           </li>
                           <li>
                               <router-link to="/assetwarranty@list">
                                   <i class="metismenu-icon">
                                   </i>Asset warranty List
                               </router-link>
                           </li>
                           <li>
                               <router-link to="/asset@depraciation">
                                   <i class="metismenu-icon">
                                   </i>Asset Depraciation
                               </router-link>
                           </li>
                           <li>
                               <router-link to="/assetdamage@list">
                                   <i class="metismenu-icon">
                                   </i>Asset Damage List
                               </router-link>
                           </li>
                           <li>
                               <router-link to="/assetbalance@list">
                                   <i class="metismenu-icon">
                                   </i>Asset Balance List
                               </router-link>
                           </li>
                           <li>
                               <router-link to="/assettotal@price">
                                   <i class="metismenu-icon">
                                   </i>Asset Total Price
                               </router-link>
                           </li>

                         </ul>
                     </li>
              </ul>
          </div>

       <!--Asset End-->

       <!--Admin Start-->

       <div class="app-sidebar__inner" style="margin-bottom: 70px">
           <ul class="vertical-nav-menu">
               <li class="app-sidebar__heading">Admin</li>
             {{-- Configaration Admin --}}
              <li >
                 <a href="#" id="icon14">
                     <i class="metismenu-icon pe-7s-rocket"></i>
                       Admin Setup
                    <i class="flaticon-add fourtheen"></i>
                 </a>
                 <ul>
                     <li>
                         <router-link to="/accountingonly@company">
                             <i class="metismenu-icon">
                             </i>Accounting Only Company
                         </router-link>
                     </li>
                     <li>
                         <router-link to="/createbusiness@type">
                             <i class="metismenu-icon">
                             </i>Create Business Type
                         </router-link>
                     </li>
                     <li>
                         <router-link to="/create@client">
                             <i class="metismenu-icon">
                             </i>Create Client
                         </router-link>
                     </li>
                     <li>
                         <router-link to="/create@staff">
                             <i class="metismenu-icon">
                             </i>Create Staff
                         </router-link>
                     </li>
                     <li>
                         <router-link to="/create@menu">
                             <i class="metismenu-icon">
                             </i>Create Menu
                         </router-link>
                     </li>
                     <li>
                         <router-link to="/createmarketing@type">
                             <i class="metismenu-icon">
                             </i>Create Marketing Type
                         </router-link>
                     </li>
                     <li>
                         <router-link to="/create@commission">
                             <i class="metismenu-icon">
                             </i>Create Commission
                         </router-link>
                     </li>
                     <li>
                         <router-link to="/create@admin">
                             <i class="metismenu-icon">
                             </i>Create Admin
                         </router-link>
                     </li>
                     <li>
                         <router-link to="/create@agent">
                             <i class="metismenu-icon">
                             </i>Create Agent
                         </router-link>
                     </li>
                     <li>
                         <router-link to="/createliana@type">
                             <i class="metismenu-icon">
                             </i>Create Liana Type
                         </router-link>
                     </li>
                     <li>
                         <router-link to="/process@shop">
                             <i class="metismenu-icon">
                             </i>Process Shop
                         </router-link>
                     </li>
                     <li>
                         <router-link to="/salestarget@create">
                             <i class="metismenu-icon">
                             </i>Sales Target Create
                         </router-link>
                     </li>
                     <li>
                         <router-link to="/createclient@ip">
                             <i class="metismenu-icon">
                             </i>Create Client IP
                         </router-link>
                     </li>
                     <li>
                         <router-link to="/purchase">
                             <i class="metismenu-icon">
                             </i>Purchase
                         </router-link>
                     </li>
                     <li>
                         <router-link to="/ip@notice">
                             <i class="metismenu-icon">
                             </i>IP Notice
                         </router-link>
                     </li>
                     <li>
                         <router-link to="/sales">
                             <i class="metismenu-icon">
                             </i>Sales
                         </router-link>
                     </li>
                     <li>
                       <router-link to="/delivery@section">
                             <i class="metismenu-icon">
                             </i>Delivery Section
                         </router-link>
                     </li>
                     <li>
                         <router-link to="/inventory">
                             <i class="metismenu-icon">
                             </i>Inventory
                         </router-link>
                     </li>
                     <li>
                         <router-link to="/client@followp">
                             <i class="metismenu-icon">
                             </i>Client Followp
                         </router-link>
                     </li>
                     <li>
                         <router-link to="/asset">
                             <i class="metismenu-icon">
                             </i>Asset
                         </router-link>
                     </li>
                     <li>
                         <router-link to="/hr">
                             <i class="metismenu-icon">
                             </i>HR
                         </router-link>
                     </li>
                     <li>
                         <router-link to="/reporting">
                             <i class="metismenu-icon">
                             </i>Reporting
                         </router-link>
                     </li>
                     <li>
                         <router-link to="/message">
                             <i class="metismenu-icon">
                             </i>Message
                         </router-link>
                     </li>
                     <li>
                         <router-link to="/notification">
                             <i class="metismenu-icon">
                             </i>Notification
                         </router-link>
                     </li>
                 </ul>
             </li>
             <li >
                <a href="#" id="icon15">
                    <i class="metismenu-icon pe-7s-rocket"></i>
                    Mother Admin
                   <i class="flaticon-add fifteen"></i>
                </a>
                <ul>
                    <li>
                        <router-link to="/setup">
                            <i class="metismenu-icon">
                            </i>Setup
                        </router-link>
                    </li>
                    <li>
                        <router-link to="/support@admin">
                            <i class="metismenu-icon">
                            </i>Support Admin
                        </router-link>
                    </li>
                    <li>
                        <router-link to="/billing@address">
                            <i class="metismenu-icon">
                            </i>Billing Address
                        </router-link>
                    </li>
                    <li>
                        <router-link to="/sub@admin">
                            <i class="metismenu-icon">
                            </i>Sub Admin
                        </router-link>
                    </li>
                    <li>
                        <router-link to="/suspend@unsuspend@admin">
                            <i class="metismenu-icon">
                            </i>Suspend &amp; Unsuspend Admin
                        </router-link>
                    </li>
                    <li>
                        <router-link to="/marketing@admin">
                            <i class="metismenu-icon">
                            </i>Marketing Admin
                        </router-link>
                    </li>
                    <li>
                        <router-link to="/commissionbase@man">
                            <i class="metismenu-icon">
                            </i>Commission base Man
                        </router-link>
                    </li>
                    <li>
                        <router-link to="/delivery@section@">
                            <i class="metismenu-icon">
                            </i>Delivery Section
                        </router-link>
                    </li>
                    <li>
                        <router-link to="/ipquery@blockadmin">
                            <i class="metismenu-icon">
                            </i>IP Query &amp; Block Admin
                        </router-link>
                    </li>
                    <li>
                        <router-link to="/information@edit">
                            <i class="metismenu-icon">
                            </i>Information Edit
                        </router-link>
                    </li>
                    <li>
                        <router-link to="/sales@team">
                            <i class="metismenu-icon">
                            </i>Sales Team
                        </router-link>
                    </li>
                    <li>
                        <router-link to="/shop@list">
                            <i class="metismenu-icon">
                            </i>Shop List
                        </router-link>
                    </li>
                    <li>
                        <router-link to="/report">
                            <i class="metismenu-icon">
                            </i>Report
                        </router-link>
                    </li>
                    <li>
                        <router-link to="/menu@permission">
                            <i class="metismenu-icon">
                            </i>Menu Permission
                        </router-link>
                    </li>
                </ul>
            </li>

            <li >
               <a href="#" id="icon16">
                   <i class="metismenu-icon pe-7s-rocket"></i>
                   Support Admin
                  <i class="flaticon-add sixteen"></i>
               </a>
               <ul>
                   <li>
                       <router-link to="/problem@entry">
                           <i class="metismenu-icon">
                           </i>Problem Entry
                       </router-link>
                   </li>
                   <li>
                       <router-link to="/client@update">
                           <i class="metismenu-icon">
                           </i>Client Update
                       </router-link>
                   </li>
                   <li>
                       <router-link to="/todaysupport@calender">
                           <i class="metismenu-icon">
                           </i>Today Support Calender
                       </router-link>
                   </li>
                   <li>
                       <router-link to="/feedback">
                           <i class="metismenu-icon">
                           </i>Feedback
                       </router-link>
                   </li>
                   <li>
                       <router-link to="/support@message">
                           <i class="metismenu-icon">
                           </i>Message
                       </router-link>
                   </li>
               </ul>
            </li>

            <li >
               <a href="#" id="icon17">
                   <i class="metismenu-icon pe-7s-rocket"></i>
                   Billing Admin
                  <i class="flaticon-add seventeen"></i>
               </a>
               <ul>
                   <li>
                       <router-link to="billingreport@daily">
                           <i class="metismenu-icon">
                           </i>Billing Report daily
                       </router-link>
                   </li>
                   <li>
                       <router-link to="due@bill">
                           <i class="metismenu-icon">
                           </i>Due Bill
                       </router-link>
                   </li>
                   <li>
                       <router-link to="duebill@feedback">
                           <i class="metismenu-icon">
                           </i>Due Bill Feedback
                       </router-link>
                   </li>
                   <li>
                       <router-link to="billing@message">
                           <i class="metismenu-icon">
                           </i>Message
                       </router-link>
                   </li>
                   <li>
                       <router-link to="overdue@bill">
                           <i class="metismenu-icon">
                           </i>Over Due Bill
                       </router-link>
                   </li>
               </ul>
            </li>
            <li >
               <a href="#" id="icon18">
                   <i class="metismenu-icon pe-7s-rocket"></i>
                    Sub Admin
                  <i class="flaticon-add eighteen"></i>
               </a>
               <ul>
                   <li>
                       <router-link to="subadmin@menu@permission">
                           <i class="metismenu-icon">
                           </i>Menu Permission
                       </router-link>
                   </li>
                   <li>
                     <router-link to="subadmin@menu@notification">
                       <i class="metismenu-icon">
                       </i>Menu Notification
                     </router-link>
                   </li>
                   <li>
                       <router-link to="subadmin@message">
                           <i class="metismenu-icon">
                           </i>Message
                       </router-link>
                   </li>
                   <li>
                       <router-link to="subadmin@report">
                           <i class="metismenu-icon">
                           </i>Report
                       </router-link>
                   </li>
               </ul>
            </li>
            <li >
               <a href="#" id="icon19">
                   <i class="metismenu-icon pe-7s-rocket"></i>
                   Suspend &amp; Unsuspend
                  <i class="flaticon-add nineteen"></i>
               </a>
               <ul>
                   <li>
                       <router-link to="billingadmin@report">
                           <i class="metismenu-icon">
                           </i>Billing Admin Report
                       </router-link>
                   </li>
                   <li>
                       <router-link to="suspend@list">
                           <i class="metismenu-icon">
                           </i>Suspend List
                       </router-link>
                   </li>
                   <li>
                       <router-link to="unsuspend@list">
                           <i class="metismenu-icon">
                           </i>Unsuspend List
                       </router-link>
                   </li>
                   <li>
                       <router-link to="suspend@unsuspend@message">
                           <i class="metismenu-icon">
                           </i>Message
                       </router-link>
                   </li>
               </ul>
            </li>
            <li >
               <a href="#" id="icon20">
                   <i class="metismenu-icon pe-7s-rocket"></i>
                    Marketing Admin
                  <i class="flaticon-add twenty"></i>
               </a>
               <ul>
                   <li>
                       <router-link to="marketing@salermanlist">
                           <i class="metismenu-icon">
                           </i>Saler Man List
                       </router-link>
                   </li>
                   <li>
                       <router-link to="marketing@salertarget">
                           <i class="metismenu-icon">
                           </i>Saler Target
                       </router-link>
                   </li>
                   <li>
                       <router-link to="marketing@salertargetachieve">
                           <i class="metismenu-icon">
                           </i>Saler Target Achieve
                       </router-link>
                   </li>
                   <li>
                       <router-link to="marketing@inactivelist">
                           <i class="metismenu-icon">
                           </i>Inactive List
                       </router-link>
                   </li>
                   <li>
                       <router-link to="marketing@poposedclient">
                           <i class="metismenu-icon">
                           </i>Poposed Client
                       </router-link>
                   </li>
                   <li>
                       <router-link to="marketing@poposedfollowp">
                           <i class="metismenu-icon">
                           </i>Poposed Followp
                       </router-link>
                   </li>
                   <li>
                       <router-link to="marketing@message">
                           <i class="metismenu-icon">
                           </i>Message
                       </router-link>
                   </li>
                   <li>
                       <router-link to="marketing@shopentry">
                           <i class="metismenu-icon">
                           </i>Shop Entry
                       </router-link>
                   </li>
               </ul>
            </li>

            <li >
               <a href="#" id="icon21">
                   <i class="metismenu-icon pe-7s-rocket"></i>
                   Saler Man
                  <i class="flaticon-add twenty-one"></i>
               </a>
               <ul>
                   <li>
                       <router-link to="/salerman@shopentry">
                           <i class="metismenu-icon">
                           </i>Shop Entry
                       </router-link>
                   </li>
                   <li>
                       <router-link to="/salerman@proposershop">
                           <i class="metismenu-icon">
                           </i>Proposer Shop
                       </router-link>
                   </li>
                   <li>
                       <router-link to="/salerman@inactivelist">
                           <i class="metismenu-icon">
                           </i>Inactive List
                       </router-link>
                   </li>
                   <li>
                       <router-link to="/salerman@profile">
                           <i class="metismenu-icon">
                           </i>Profile
                       </router-link>
                   </li>
                   <li>
                       <router-link to="/salerman@message">
                           <i class="metismenu-icon">
                           </i>Message
                       </router-link>
                   </li>
                   <li>
                       <router-link to="/salerman@totalearning">
                           <i class="metismenu-icon">
                           </i>Total Earning
                       </router-link>
                   </li>
                   <li>
                       <router-link to="/salerman@monthlyearning">
                           <i class="metismenu-icon">
                           </i>Monthly Earning
                       </router-link>
                   </li>
               </ul>
            </li>
            <li >
               <a href="#" id="icon22">
                   <i class="metismenu-icon pe-7s-rocket"></i>
                    Delivery Section
                  <i class="flaticon-add twenty-two "></i>
               </a>
               <ul>
                   <li>
                       <router-link to="update@shopinformation">
                           <i class="metismenu-icon">
                           </i> Update Shop Information
                       </router-link>
                   </li>
                   <li>
                       <router-link to="delivery@report">
                           <i class="metismenu-icon">
                           </i> Delivery Report
                       </router-link>
                   </li>
                   <li>
                       <router-link to="delivery@calender">
                           <i class="metismenu-icon">
                           </i> Delivery Calendar
                       </router-link>
                   </li>
                   <li>
                       <router-link to="delivery@request">
                           <i class="metismenu-icon">
                           </i> Delivery Request
                       </router-link>
                   </li>
                   <li>
                       <router-link to="delivery@message">
                           <i class="metismenu-icon">
                           </i> Message
                       </router-link>
                   </li>
                   <li>
                       <router-link to="delivery@supportadmin">
                           <i class="metismenu-icon">
                           </i> Contact Support Admin
                       </router-link>
                   </li>
               </ul>
            </li>
            <li >
               <a href="#" id="icon23">
                   <i class="metismenu-icon pe-7s-rocket"></i>
                    IP Query
                  <i class="flaticon-add twenty-three "></i>
               </a>
               <ul>
                   <li>
                       <router-link to="/ip@add">
                           <i class="metismenu-icon">
                           </i>IP add
                       </router-link>
                   </li>
                   <li>
                       <router-link to="/ip@lock">
                           <i class="metismenu-icon">
                           </i>IP Lock
                       </router-link>
                   </li>
                   <li>
                       <router-link to="/ip@unblock">
                           <i class="metismenu-icon">
                           </i>IP Unlock
                       </router-link>
                   </li>
                   <li>
                       <router-link to="/ipquery@message">
                           <i class="metismenu-icon">
                           </i>Message<span class="badge ml-2 badge-pill badge-danger">69</span>
                       </router-link>
                   </li>
               </ul>
            </li>
            <li >
               <a href="#" id="icon24">
                   <i class="metismenu-icon pe-7s-rocket"></i>
                  Information Edit  Admin
                  <i class="flaticon-add twenty-four "></i>
               </a>
               <ul>
                   <li>
                       <router-link to="/support@panding">
                           <i class="metismenu-icon">
                           </i>Support panding <span class="badge ml-2 badge-pill badge-danger">69</span>
                       </router-link>
                   </li>
                   <li>
                       <router-link to="/complate@edit">
                           <i class="metismenu-icon">
                           </i>Complate Edit
                       </router-link>
                   </li>
                   <li>
                       <router-link to="/editadmin@search">
                           <i class="metismenu-icon">
                           </i>Search
                       </router-link>
                   </li>
                   <li>
                       <router-link to="/editadmin@message">
                           <i class="metismenu-icon">
                           </i>Message
                       </router-link>
                   </li>
               </ul>
            </li>

         </ul>
       </div>

        <!--Admin End-->
   </div>
</div>
