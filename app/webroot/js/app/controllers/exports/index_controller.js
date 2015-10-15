// Copyright (C) <2015>  <it-novum GmbH>
//
// This file is dual licensed
//
// 1.
//	This program is free software: you can redistribute it and/or modify
//	it under the terms of the GNU General Public License as published by
//	the Free Software Foundation, version 3 of the License.
//
//	This program is distributed in the hope that it will be useful,
//	but WITHOUT ANY WARRANTY; without even the implied warranty of
//	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//	GNU General Public License for more details.
//
//	You should have received a copy of the GNU General Public License
//	along with this program.  If not, see <http://www.gnu.org/licenses/>.
//

// 2.
//	If you purchased an openITCOCKPIT Enterprise Edition you can use this file
//	under the terms of the openITCOCKPIT Enterprise Edition license agreement.
//	License agreement and license key will be shipped with the order
//	confirmation.

App.Controllers.ExportsIndexController = Frontend.AppController.extend({
	$textarea: null,
	$progressbar: null,
	$progressbarText: null,
	$progressbarBar: null,
	$progressbarContainer: null,
	$log: null,
	
	$exportLog: null,
	
	/**
	 * @constructor
	 * @return {void} 
	 */
	
	components: ['WebsocketSudo'],

	_initialize: function(){
		/*
		 * Fix for ugly FireFox behavior :(
		 */
		$('#launchExport').prop( "disabled", false);


		$('#launchExport').click(function(){
			$('#exportInfo').show();
			$('#launchExport').prop( "disabled", true);
			
			//Update export status
			var worker = function(){
				$.ajax({
					url: '/exports/broadcast.json',
					type: "GET",
					success: function(response){
						//console.log(response);
						var $exportLog = $('#exportLog');
						for(var key in response.exportRecords){
							var $exportLogEntry = $exportLog.children('#'+key);
							//console.log($exportLogEntry.length);
							if($exportLogEntry.length == 0){
								//Record does not exists, we need to create it
								if(response.exportRecords[key].finished == 0){
									var html = '<div id="'+key+'" data-finished="0"><i class="fa fa-spin fa-refresh"></i> <span>'+response.exportRecords[key].text+'</span></div>';
								}else{
									var html = '<div id="'+key+'" data-finished="1"><i class="fa fa-check text-success"></i> <span>'+response.exportRecords[key].text+'</span></div>';
								}
								$exportLog.append(html);
							}else{
								//Record exists, lets update it
								if(response.exportRecords[key].finished == 0){
									//If we overwrite existing records, the spin animation will flapp
									if($exportLogEntry.data('finished') != 0){
										var html = '<i class="fa fa-spin fa-refresh"></i> <span>'+response.exportRecords[key].text+'</span>';
										$exportLogEntry.html(html);
									}
								}else{
									if($exportLogEntry.data('finished') != 1){
										var html = '<i class="fa fa-check text-success"></i> <span>'+response.exportRecords[key].text+'</span>';
										$exportLogEntry.html(html);
									}
								}
							}
						}
					},
					complete: function() {
						// Schedule the next request when the current one's complete
						setTimeout(worker, 1000);
					}
				});
			};
			
			$.ajax({
				url: '/exports/launchExport',
				type: "GET",
				success: function(data) {
					worker();
				},
				complete: function() {
				}
			});
		});
	}
});
