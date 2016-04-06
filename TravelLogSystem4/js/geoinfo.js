// JavaScript Document

            function initMap() {
                var latitude = parseFloat(document.getElementById("latitude").value);
                var longitude = parseFloat(document.getElementById("longitude").value);
                var mapDiv = document.getElementById('googleMap');
                var map = new google.maps.Map(mapDiv, {
                    center: {lat: latitude, lng: longitude},
                    zoom: 12
                });
            }
            
            function loadScript() {
                var script = document.createElement("script");
                script.src = "https://maps.googleapis.com/maps/api/js?callback=initMap";
                document.body.appendChild(script);
            }
            
            $(document).ready(function(){
                $('#getgeoinfo').on('click', function(){
                    var loc = document.getElementById("locationname").value;
                    if(loc === "") {
                        alert('Enter location name to get geoinformation');
                    }
                    else {
                        $.get("getgeoinformation.php",{locationname: encodeURI(loc)}, function(data){
                            if(data !== "") {    
                                var d = data.split("#");
                                document.getElementById("placename").value = d[0];
                                document.getElementById("address").value = d[1];
                                document.getElementById("longitude").value = d[2];
                                document.getElementById("latitude").value = d[3];
                                loadScript();
                                $("#save").prop('disabled', false);
                            }
                            else {
                                alert('Error in get google places.');
                            }
                        });
                    }
                });
            });