<!DOCTYPE html>
                                                <style>

                                                    table {
                                                          width: 75%;
                                                           height:100%;
                                                            
                                                            padding:0;
                                                            margin:10;
                                                            }

                                                </style>
                                                <center>
                                                 <button type="submit" onclick= "window.location.href = 'http://localhost/code/customersupportportal/supportdashboard';">Go Back to Dashboard</button>
        
                                                <table> 
                                                <h3>Manage Cutomers</h3> 
                                                <tr> 
                                                    <th>UserId</th>
                                                    <th>User Name</th> 
                                                    <th>User Email</th>
                                                    <th>Login Username</th>
                                                    <th>Login Password</th>
                                                    <th>User Contact Number</th>
                                                    <th>Address</th>
                                                    <th>Action</th>
                                                    

                                                    
                                                </tr> 
                                                <tr> 
                                                    <td>110</td> 
                                                    <td contentEditable="true">Kimeth Williams</td> 
                                                    <td contentEditable="true">kimeth54@gmail.com</td>
                                                    <td contentEditable="true">kimeth54@gmail.com</td>
                                                    <td contentEditable="true">$2y$10$FYXXADJPZNPHLYkAVB</td>
                                                    <td contentEditable="true">9876542378</td>
                                                    <td contentEditable="true">614 Harrison Ave Harrison New Jersey 07029</td> 
                                                    <td><button type="Button" style="height:20px;width:10px text-align:center;">Update</button>&nbsp;
                                                    <p><button type="Button" style="height:20px;width:10px text-align:center;" onclick="window.location.href = 'http://localhost/code/admin/deletecustomers';">Delete</button>&nbsp;
                                                    <button type="Button" style="height:20px;width:10px text-align:center;" onclick="Success();">Freeze</button></td>
                                                    <script>
                                                      
                                                    function Success(){
                                                        alert("User account is freezed!");
                                                        
                                                    
                                                    }
                                                </script>
                                                </tr> 
                                                <tr> 
                                                     
                                                    <td contentEditable="true">110</td> 
                                                    <td contentEditable="true">Briana Gures</td> 
                                                    <td contentEditable="true">briana654@gmail.com</td>
                                                    <td>brgr@yahoo.com</td>
                                                    <td>XADJP$2y$10$FYXZNPHLYkAVB</td>
                                                    <td>9876543286</td>
                                                    <td>765 Williams street Bloomfield 07104</td> 
                                                    <td><button type="Button" style="height:20px;width:10px text-align:center;">Update</button>&nbsp;
                                                    <p><button type="Button" style="height:20px;width:10px text-align:center;" onclick="Delete();">Delete</button>&nbsp;
                                                    <button type="Button" style="height:20px;width:10px text-align:center;" onclick="Success();">Freeze</button></td>
                                                    <script>
                                                        function Delete(){
                                                        alert("User account is deleted successfully!");
                                                        window.location.href = "http://localhost/code/admin/managecustomers"
                                                    
                                                    }
                                                    function Success(){
                                                        alert("User account is freezed!");
                                                        window.location.href = "http://localhost/code/admin/managecustomers"
                                                    
                                                    }
                                                </script>
                                                </tr> 
                                                    <tr> 
                                                    <td>110</td> 
                                                    <td>Tylor Estrella</td> 
                                                    <td>tylorestrella87@gmail.com</td>
                                                    <td>tylor87@gmail.com</td>
                                                    <td>$7YGTRF45$YHGTR</td>
                                                    <td>8432667549</td>
                                                    <td>25 Clifton Ave Newark 07105</td> 
                                                    <td><button type="Button" style="height:20px;width:10px text-align:center;">Update</button>&nbsp;
                                                  <p><button type="Button" style="height:20px;width:10px text-align:center;" onclick="Delete();">Delete</button>&nbsp;
                                                    <button type="Button" style="height:20px;width:10px text-align:center;" onclick="Success();">Freeze</button></td>
                                                    <script>
                                                        function Delete(){
                                                        alert("User account is deleted successfully!");
                                                        window.location.href = "http://localhost/code/admin/managecustomers"
                                                    
                                                    }
                                                    function Success(){
                                                        alert("User account is freezed!");
                                                        window.location.href = "http://localhost/code/admin/managecustomers"
                                                    
                                                    }
                                                </script>
                                                    </tr>
                                                 
                                                    
                                                </table>
                                        </center>
                                    </div>