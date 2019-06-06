// Springshare API object.
                function SpringshareAPI(object_id) {
                        this.div_id = object_id;
                        this.content = '';
                }
                SpringshareAPI.prototype.render = function() {
                        var content_div = document.getElementById(this.div_id);
                       
                        if ( content_div != null ) {
                                content_div.innerHTML = this.content;
                        } else {
                                alert('Content div not found: ' + this.div_id);
                        }
                }
                var obj_api_upc_cid7772_5636_6780_iid102 = new SpringshareAPI('api_upc_cid7772_5636_6780_iid102');
                obj_api_upc_cid7772_5636_6780_iid102.content = '<h3 class="s-lc-ea-h3">Upcoming Events</h3><ul><li><a target="_blank" href="https://uow.libcal.com/event/5206842?hs=a">Exhibition: Ethel Hayton Hoskins - A Woman of Many Hats MBE 1913-1988</a><br><span class="s-lc-ea-date">10:00am - 5:00pm Saturday, May 11, 2019</span></li><li><a target="_blank" href="https://uow.libcal.com/event/5206843?hs=a">Exhibition: Ethel Hayton Hoskins - A Woman of Many Hats MBE 1913-1988</a><br><span class="s-lc-ea-date">10:00am - 5:00pm Sunday, May 12, 2019</span></li><li><a target="_blank" href="https://uow.libcal.com/event/5206844?hs=a">Exhibition: Ethel Hayton Hoskins - A Woman of Many Hats MBE 1913-1988</a><br><span class="s-lc-ea-date">10:00am - 5:00pm Monday, May 13, 2019</span></li><li><a target="_blank" href="https://uow.libcal.com/event/5206845?hs=a">Exhibition: Ethel Hayton Hoskins - A Woman of Many Hats MBE 1913-1988</a><br><span class="s-lc-ea-date">10:00am - 5:00pm Tuesday, May 14, 2019</span></li><li><a target="_blank" href="https://uow.libcal.com/event/5206846?hs=a">Exhibition: Ethel Hayton Hoskins - A Woman of Many Hats MBE 1913-1988</a><br><span class="s-lc-ea-date">10:00am - 5:00pm Wednesday, May 15, 2019</span></li></ul>'; obj_api_upc_cid7772_5636_6780_iid102.render();