<!DOCTYPE html>
                                                <style>

                                                    table {
                                                          width: 75%;
                                                           height:100%;
                                                            
                                                            padding:0;
                                                            margin:10;
                                                            }

                                                </style>
                                                <center><h3>Manage Manual Bookings</h3></center>

                                                 <button type="submit" onclick= "window.location.href = 'http://localhost/code/admin/dashboard';">Go Back to Dashboard</button>
                                                <center>
                                                <p><table> 
                                                 
                                                <tr> 
                                                        <th>Booking Id</th>
                                                        <th>Music Company</th>
                                                        <th>Event Location</th>
                                                        <th>Booking Date</th>
                                                        <th>Show timings</th>
                                                        <th>Booking Ammount</th>
                                                        <th>Customer Contact number</th>
                                                        <th>Booked For</th>
                                                        <th>Musician Contact number</th>
                                                        <th>Status</th>
                                                        <th>Actions</th>                                                 
                                                    

                                                    
                                                </tr> 
                                                <tr> 
                                                    
                                                    <td contentEditable="true">110</td>
                                                    <td contentEditable="true">Rock Symphony</td>
                                                    <td contentEditable="true">Cruizers Theatre</td>
                                                    <td contentEditable="true">10/11/2021</td>
                                                    <td contentEditable="true">12am-3am</td>
                                                    <td>$1200</td>
                                                    <td contentEditable="true">9735369240</td>

                                                    <td>Peter Wayne</td>
                                                    <td contentsEditable="true">9745463249</td>
                                                    <td>Confirmed</td> 
                                                    <td><button type="Button" style="height:20px;width:10px text-align:center;">Update Booking</button>&nbsp;
                                                        
                                                
                                                    <p><button type="Button" style="height:20px;width:10px text-align:center;">Cancel Booking</button></td></p>
                                                    
                                                
                                                </tr> 
                                                <tr> 
                                                     
                                                    <td contentEditable="true">110</td> 
                                                    <td contentEditable="true">Highlanders</td> 
                                                    <td contentEditable="true">Varsity Hall New Jersey</td>
                                                    <td contentEditable="true">21/12/2021</td>
                                                    <td contentEditable="true">11pm-6am</td>
                                                    <td>$15000</td>
                                                    <td contentEditable="true">9876543286</td>
                                                    <td>Diana Estrella</td>
                                                    <td contentsEditable="true">887601800</td>
                                                    <td>Cancelled</td>
                                                    <td><button type="Button" onclick="Success();" style="height:20px;width:10px text-align:center;">Update Booking</button>&nbsp;
                                                    <p><button type="Button" style="height:20px;width:10px text-align:center;" >Cancel Booking</button></td></p>
                                                    <script>
                                                            function Success(){
                                                        alert("Exception:You cannot update a cancelled booking ");
                                                        window.location.href = "http://localhost/code/admin/uponlinebookings"
                                                    
                                                    }
                                                </script>
                                                </tr> 
                                                    <tr> 
                                                    <td>112</td> 
                                                    <td contentEditable="true">Fantastic Four</td> 
                                                    <td contentEditable="true">308 6th street Kearny Ave Edison New Jersey</td>
                                                    <td contentEditable="true">25/12/2021</td>
                                                    <td contentEditable="true">4pm-3am</td>
                                                    <td>$4500</td>
                                                    <td contentEditable="true">9876548754</td> 
                                                    <td>Henry Marshal</td>
                                                    <td contentsEditable="true">2017654911</td>
                                                    <td>Confirmed</td>
                                                    <td><button type="Button" style="height:20px;width:10px text-align:center;">Update Booking</button>&nbsp;
                                                  <p><button type="Button" style="height:20px;width:10px text-align:center;" onclick="Delete();">Cancel Booking</button>&nbsp;</td>
                                                    <script>
                                                        function Delete(){
                                                        alert("This Booking has cancelled successfully!");
                                                        window.location.href = "http://localhost/code/admin/managecustomers"
                                                    
                                                    }
                                                </script>
                                                    </tr>
                                                 
                                                    
                                                </table>
                                        </center>
                                    </div>