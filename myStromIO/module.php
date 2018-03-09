<?

if (@constant('IPS_BASE') == null) //Nur wenn Konstanten noch nicht bekannt sind.
{
// --- BASE MESSAGE
	define('IPS_BASE', 10000);                             //Base Message
	define('IPS_KERNELSHUTDOWN', IPS_BASE + 1);            //Pre Shutdown Message, Runlevel UNINIT Follows
	define('IPS_KERNELSTARTED', IPS_BASE + 2);             //Post Ready Message
// --- KERNEL
	define('IPS_KERNELMESSAGE', IPS_BASE + 100);           //Kernel Message
	define('KR_CREATE', IPS_KERNELMESSAGE + 1);            //Kernel is beeing created
	define('KR_INIT', IPS_KERNELMESSAGE + 2);              //Kernel Components are beeing initialised, Modules loaded, Settings read
	define('KR_READY', IPS_KERNELMESSAGE + 3);             //Kernel is ready and running
	define('KR_UNINIT', IPS_KERNELMESSAGE + 4);            //Got Shutdown Message, unloading all stuff
	define('KR_SHUTDOWN', IPS_KERNELMESSAGE + 5);          //Uninit Complete, Destroying Kernel Inteface
// --- KERNEL LOGMESSAGE
	define('IPS_LOGMESSAGE', IPS_BASE + 200);              //Logmessage Message
	define('KL_MESSAGE', IPS_LOGMESSAGE + 1);              //Normal Message                      | FG: Black | BG: White  | STLYE : NONE
	define('KL_SUCCESS', IPS_LOGMESSAGE + 2);              //Success Message                     | FG: Black | BG: Green  | STYLE : NONE
	define('KL_NOTIFY', IPS_LOGMESSAGE + 3);               //Notiy about Changes                 | FG: Black | BG: Blue   | STLYE : NONE
	define('KL_WARNING', IPS_LOGMESSAGE + 4);              //Warnings                            | FG: Black | BG: Yellow | STLYE : NONE
	define('KL_ERROR', IPS_LOGMESSAGE + 5);                //Error Message                       | FG: Black | BG: Red    | STLYE : BOLD
	define('KL_DEBUG', IPS_LOGMESSAGE + 6);                //Debug Informations + Script Results | FG: Grey  | BG: White  | STLYE : NONE
	define('KL_CUSTOM', IPS_LOGMESSAGE + 7);               //User Message                        | FG: Black | BG: White  | STLYE : NONE
// --- MODULE LOADER
	define('IPS_MODULEMESSAGE', IPS_BASE + 300);           //ModuleLoader Message
	define('ML_LOAD', IPS_MODULEMESSAGE + 1);              //Module loaded
	define('ML_UNLOAD', IPS_MODULEMESSAGE + 2);            //Module unloaded
// --- OBJECT MANAGER
	define('IPS_OBJECTMESSAGE', IPS_BASE + 400);
	define('OM_REGISTER', IPS_OBJECTMESSAGE + 1);          //Object was registered
	define('OM_UNREGISTER', IPS_OBJECTMESSAGE + 2);        //Object was unregistered
	define('OM_CHANGEPARENT', IPS_OBJECTMESSAGE + 3);      //Parent was Changed
	define('OM_CHANGENAME', IPS_OBJECTMESSAGE + 4);        //Name was Changed
	define('OM_CHANGEINFO', IPS_OBJECTMESSAGE + 5);        //Info was Changed
	define('OM_CHANGETYPE', IPS_OBJECTMESSAGE + 6);        //Type was Changed
	define('OM_CHANGESUMMARY', IPS_OBJECTMESSAGE + 7);     //Summary was Changed
	define('OM_CHANGEPOSITION', IPS_OBJECTMESSAGE + 8);    //Position was Changed
	define('OM_CHANGEREADONLY', IPS_OBJECTMESSAGE + 9);    //ReadOnly was Changed
	define('OM_CHANGEHIDDEN', IPS_OBJECTMESSAGE + 10);     //Hidden was Changed
	define('OM_CHANGEICON', IPS_OBJECTMESSAGE + 11);       //Icon was Changed
	define('OM_CHILDADDED', IPS_OBJECTMESSAGE + 12);       //Child for Object was added
	define('OM_CHILDREMOVED', IPS_OBJECTMESSAGE + 13);     //Child for Object was removed
	define('OM_CHANGEIDENT', IPS_OBJECTMESSAGE + 14);      //Ident was Changed
	define('OM_CHANGEDISABLED', IPS_OBJECTMESSAGE + 15);   //Operability has changed
// --- INSTANCE MANAGER
	define('IPS_INSTANCEMESSAGE', IPS_BASE + 500);         //Instance Manager Message
	define('IM_CREATE', IPS_INSTANCEMESSAGE + 1);          //Instance created
	define('IM_DELETE', IPS_INSTANCEMESSAGE + 2);          //Instance deleted
	define('IM_CONNECT', IPS_INSTANCEMESSAGE + 3);         //Instance connectged
	define('IM_DISCONNECT', IPS_INSTANCEMESSAGE + 4);      //Instance disconncted
	define('IM_CHANGESTATUS', IPS_INSTANCEMESSAGE + 5);    //Status was Changed
	define('IM_CHANGESETTINGS', IPS_INSTANCEMESSAGE + 6);  //Settings were Changed
	define('IM_CHANGESEARCH', IPS_INSTANCEMESSAGE + 7);    //Searching was started/stopped
	define('IM_SEARCHUPDATE', IPS_INSTANCEMESSAGE + 8);    //Searching found new results
	define('IM_SEARCHPROGRESS', IPS_INSTANCEMESSAGE + 9);  //Searching progress in %
	define('IM_SEARCHCOMPLETE', IPS_INSTANCEMESSAGE + 10); //Searching is complete
// --- VARIABLE MANAGER
	define('IPS_VARIABLEMESSAGE', IPS_BASE + 600);              //Variable Manager Message
	define('VM_CREATE', IPS_VARIABLEMESSAGE + 1);               //Variable Created
	define('VM_DELETE', IPS_VARIABLEMESSAGE + 2);               //Variable Deleted
	define('VM_UPDATE', IPS_VARIABLEMESSAGE + 3);               //On Variable Update
	define('VM_CHANGEPROFILENAME', IPS_VARIABLEMESSAGE + 4);    //On Profile Name Change
	define('VM_CHANGEPROFILEACTION', IPS_VARIABLEMESSAGE + 5);  //On Profile Action Change
// --- SCRIPT MANAGER
	define('IPS_SCRIPTMESSAGE', IPS_BASE + 700);           //Script Manager Message
	define('SM_CREATE', IPS_SCRIPTMESSAGE + 1);            //On Script Create
	define('SM_DELETE', IPS_SCRIPTMESSAGE + 2);            //On Script Delete
	define('SM_CHANGEFILE', IPS_SCRIPTMESSAGE + 3);        //On Script File changed
	define('SM_BROKEN', IPS_SCRIPTMESSAGE + 4);            //Script Broken Status changed
// --- EVENT MANAGER
	define('IPS_EVENTMESSAGE', IPS_BASE + 800);             //Event Scripter Message
	define('EM_CREATE', IPS_EVENTMESSAGE + 1);             //On Event Create
	define('EM_DELETE', IPS_EVENTMESSAGE + 2);             //On Event Delete
	define('EM_UPDATE', IPS_EVENTMESSAGE + 3);
	define('EM_CHANGEACTIVE', IPS_EVENTMESSAGE + 4);
	define('EM_CHANGELIMIT', IPS_EVENTMESSAGE + 5);
	define('EM_CHANGESCRIPT', IPS_EVENTMESSAGE + 6);
	define('EM_CHANGETRIGGER', IPS_EVENTMESSAGE + 7);
	define('EM_CHANGETRIGGERVALUE', IPS_EVENTMESSAGE + 8);
	define('EM_CHANGETRIGGEREXECUTION', IPS_EVENTMESSAGE + 9);
	define('EM_CHANGECYCLIC', IPS_EVENTMESSAGE + 10);
	define('EM_CHANGECYCLICDATEFROM', IPS_EVENTMESSAGE + 11);
	define('EM_CHANGECYCLICDATETO', IPS_EVENTMESSAGE + 12);
	define('EM_CHANGECYCLICTIMEFROM', IPS_EVENTMESSAGE + 13);
	define('EM_CHANGECYCLICTIMETO', IPS_EVENTMESSAGE + 14);
// --- MEDIA MANAGER
	define('IPS_MEDIAMESSAGE', IPS_BASE + 900);           //Media Manager Message
	define('MM_CREATE', IPS_MEDIAMESSAGE + 1);             //On Media Create
	define('MM_DELETE', IPS_MEDIAMESSAGE + 2);             //On Media Delete
	define('MM_CHANGEFILE', IPS_MEDIAMESSAGE + 3);         //On Media File changed
	define('MM_AVAILABLE', IPS_MEDIAMESSAGE + 4);          //Media Available Status changed
	define('MM_UPDATE', IPS_MEDIAMESSAGE + 5);
// --- LINK MANAGER
	define('IPS_LINKMESSAGE', IPS_BASE + 1000);           //Link Manager Message
	define('LM_CREATE', IPS_LINKMESSAGE + 1);             //On Link Create
	define('LM_DELETE', IPS_LINKMESSAGE + 2);             //On Link Delete
	define('LM_CHANGETARGET', IPS_LINKMESSAGE + 3);       //On Link TargetID change
// --- DATA HANDLER
	define('IPS_DATAMESSAGE', IPS_BASE + 1100);             //Data Handler Message
	define('FM_CONNECT', IPS_DATAMESSAGE + 1);             //On Instance Connect
	define('FM_DISCONNECT', IPS_DATAMESSAGE + 2);          //On Instance Disconnect
// --- SCRIPT ENGINE
	define('IPS_ENGINEMESSAGE', IPS_BASE + 1200);           //Script Engine Message
	define('SE_UPDATE', IPS_ENGINEMESSAGE + 1);             //On Library Refresh
	define('SE_EXECUTE', IPS_ENGINEMESSAGE + 2);            //On Script Finished execution
	define('SE_RUNNING', IPS_ENGINEMESSAGE + 3);            //On Script Started execution
// --- PROFILE POOL
	define('IPS_PROFILEMESSAGE', IPS_BASE + 1300);
	define('PM_CREATE', IPS_PROFILEMESSAGE + 1);
	define('PM_DELETE', IPS_PROFILEMESSAGE + 2);
	define('PM_CHANGETEXT', IPS_PROFILEMESSAGE + 3);
	define('PM_CHANGEVALUES', IPS_PROFILEMESSAGE + 4);
	define('PM_CHANGEDIGITS', IPS_PROFILEMESSAGE + 5);
	define('PM_CHANGEICON', IPS_PROFILEMESSAGE + 6);
	define('PM_ASSOCIATIONADDED', IPS_PROFILEMESSAGE + 7);
	define('PM_ASSOCIATIONREMOVED', IPS_PROFILEMESSAGE + 8);
	define('PM_ASSOCIATIONCHANGED', IPS_PROFILEMESSAGE + 9);
// --- TIMER POOL
	define('IPS_TIMERMESSAGE', IPS_BASE + 1400);            //Timer Pool Message
	define('TM_REGISTER', IPS_TIMERMESSAGE + 1);
	define('TM_UNREGISTER', IPS_TIMERMESSAGE + 2);
	define('TM_SETINTERVAL', IPS_TIMERMESSAGE + 3);
	define('TM_UPDATE', IPS_TIMERMESSAGE + 4);
	define('TM_RUNNING', IPS_TIMERMESSAGE + 5);
// --- STATUS CODES
	define('IS_SBASE', 100);
	define('IS_CREATING', IS_SBASE + 1); //module is being created
	define('IS_ACTIVE', IS_SBASE + 2); //module created and running
	define('IS_DELETING', IS_SBASE + 3); //module us being deleted
	define('IS_INACTIVE', IS_SBASE + 4); //module is not beeing used
// --- ERROR CODES
	define('IS_EBASE', 200);          //default errorcode
	define('IS_NOTCREATED', IS_EBASE + 1); //instance could not be created
// --- Search Handling
	define('FOUND_UNKNOWN', 0);     //Undefined value
	define('FOUND_NEW', 1);         //Device is new and not configured yet
	define('FOUND_OLD', 2);         //Device is already configues (InstanceID should be set)
	define('FOUND_CURRENT', 3);     //Device is already configues (InstanceID is from the current/searching Instance)
	define('FOUND_UNSUPPORTED', 4); //Device is not supported by Module
	define('vtBoolean', 0);
	define('vtInteger', 1);
	define('vtFloat', 2);
	define('vtString', 3);
	define('vtArray', 8);
	define('vtObject', 9);
}

// module for MyStrom

class MyStromIO extends IPSModule
{

	public function Create()
	{
		//Never delete this line!
		parent::Create();

		//These lines are parsed on Symcon Startup or Instance creation
		//You cannot use variables here. Just static values.

		$this->RegisterPropertyInteger('UpdateInterval', 60);
		$this->RegisterTimer('MyStromDataUpdate', 0, 'MyStrom_DataUpdate(' . $this->InstanceID . ');');
	}

	public function ApplyChanges()
	{
		//Never delete this line!
		parent::ApplyChanges();

		$this->ValidateConfiguration();
	}

	/**
	 * Die folgenden Funktionen stehen automatisch zur Verfügung, wenn das Modul über die "Module Control" eingefügt wurden.
	 * Die Funktionen werden, mit dem selbst eingerichteten Prefix, in PHP und JSON-RPC wiefolgt zur Verfügung gestellt:
	 *
	 *
	 */

	private function ValidateConfiguration()
	{

		$this->SetUpdateIntervall();
		// Status Aktiv
		$this->SetStatus(102);

	}

	/**
	 * Set Timer Intervall
	 */
	protected function SetUpdateIntervall()
	{
		$interval = ($this->ReadPropertyInteger("UpdateInterval")) * 1000; // interval seconds
		$this->SendDebug("myStrom", "Set update interval to " . $interval . " seconds", 0);
		$this->SetTimerInterval("MyStromDataUpdate", $interval);
	}

	/**
	 * Update Data
	 */
	public function DataUpdate()
	{
		$this->SendDebug("myStrom", "update", 0);
		$counterguid = '{C6D2D58D-E32A-5F1A-42B6-35E0E6915623}'; // MyStrom
		$InstanzenListe = IPS_GetInstanceListByModuleID($counterguid); // MyStrom
		$InstanzCount = 0;
		foreach ($InstanzenListe as $InstanzID) {
			$InstanzCount++;
			$mac = IPS_GetProperty($InstanzID, "mac");
			$ip = IPS_GetProperty($InstanzID, "ip");
			$devicetype = IPS_GetProperty($InstanzID, "devicetype");
			$this->GetCurrentState($mac, $ip, $devicetype);
			IPS_Sleep(500);
		}
	}

	public function GetCurrentState($mac, $ip, $devicetype)
	{
		$URL = "http://" . $ip . "/api/v1/device/" . $mac;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$URL);
		curl_setopt($ch, CURLOPT_TIMEOUT, 30); //timeout after 30 seconds
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		$payload = curl_exec ($ch);
		curl_close ($ch);
		// test
		//$payload = '{"6001940376FA": {"type": "rgblamp", "battery": false, "reachable": true, "meshroot": false, "on": true, "color": "0;0;100", "power": 5.8, "fw_version": "2.19"}}';
		$this->SendDebug("MyStrom Response", $payload, 0);
		$data = json_decode($payload, true);
		$mac = key($data);
		$this->SendDebug("MyStrom MAC", $mac, 0);
		if ($devicetype == 0) // switch
		{
			if (isset($data[$mac]["on"])) {
				$status = $data[$mac]["on"];
				$this->SendDebug("MyStrom Status", $status, 0);
			}
		} elseif ($devicetype == 1) // bulb
		{
			if (isset($data[$mac]["on"])) {
				$status = $data[$mac]["on"];
				$this->SendDebug("MyStrom Status", $status, 0);
			}
			if (isset($data[$mac]["type"])) {
				$type = $data[$mac]["type"];
				$this->SendDebug("MyStrom Type", $type, 0);
			}
			if (isset($data[$mac]["battery"])) {
				$battery = $data[$mac]["battery"];
				$this->SendDebug("MyStrom Battery", $battery, 0);
			}
			if (isset($data[$mac]["reachable"])) {
				$reachable = $data[$mac]["reachable"];
				$this->SendDebug("MyStrom Reachable", $reachable, 0);
			}
			if (isset($data[$mac]["meshroot"])) {
				$meshroot = $data[$mac]["meshroot"];
				$this->SendDebug("MyStrom Meshroot", $meshroot, 0);
			}
			if (isset($data[$mac]["color"])) {
				$color = $data[$mac]["color"];
				$this->SendDebug("MyStrom MAC", $color, 0);
			}
			if (isset($data[$mac]["power"])) {
				$power = $data[$mac]["power"];
				$this->SendDebug("MyStrom Power", $power, 0);
			}
			if (isset($data[$mac]["fw_version"])) {
				$fw_version = $data[$mac]["fw_version"];
				$this->SendDebug("MyStrom Firmware", $fw_version, 0);
			}
		}
		return $payload;
	}

	public function DebugTest()
	{
		$data = array("type" => "data_request", "status" => "on");
		$payload = array("mac" => "5ccf7f02d676", "data" => $data);
		$this->SendToMyStromDevice($payload);
	}

	// Type String, Declaration can be used when PHP 7 is available
	//public function ForwardData(string $JSONString)
	public function ForwardData($JSONString)
	{

		// Empfangene Daten von der Device Instanz
		$data = json_decode($JSONString);
		$datasend = $data->Buffer;
		$this->SendDebug("I/O Forward Data:", json_encode($datasend), 0);

		$type = $datasend->type;
		$this->SendDebug("Command type: ", $type, 0);
		if (isset($datasend->mac) && isset($datasend->ip) && isset($datasend->devicetype) && isset($datasend->command)) {
			$mac = $datasend->mac;
			$this->SendDebug("myStrom mac: ", $mac, 0);
			$ip = $datasend->ip;
			$this->SendDebug("myStrom ip: ", $ip, 0);
			$devicetype = $datasend->devicetype;
			$this->SendDebug("myStrom device type: ", $devicetype, 0);
			$command = $datasend->command;
			$this->SendDebug("Command: ", $command, 0);
			$result = $this->SendDataToMyStrom($type, $mac, $ip, $devicetype, $command);
			return $result;
		} else {
			return false;
		}
	}

	protected function SendDataToMyStrom($type, $mac, $ip, $devicetype, $command)
	{
		if ($type == "get_data") {
			$result = $this->GetCurrentState($mac, $ip, $devicetype);
		} else {
			$result = $this->Send($mac, $ip, $command);
		}
		return $result;
	}

	protected function SendToMyStromDevice($data)
	{
		// Weiterleitung zu allen Gerät-/Device-Instanzen
		$this->SendDebug("MyStrom I/O", json_encode($data), 0);
		$this->SendDataToChildren(json_encode(Array("DataID" => "{5CD26D2F-626B-1998-D2B8-6068E6ACD376}", "Buffer" => $data))); //  I/O RX GUI
	}

	function Send($mac, $ip, $command)
	{
		$URL = "http://" . $ip . "/api/v1/device/" . $mac;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$URL);
		curl_setopt($ch, CURLOPT_TIMEOUT, 30); //timeout after 30 seconds
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $command);
		$response = curl_exec($ch);
		$err = curl_error($ch);

		curl_close($ch);

		if ($err) {
			$this->SendDebug("MyStrom", "cURL Error #:" . $err, 0);
			return "cURL Error #:" . $err;
		} else {
			return $response;
		}
		return $response;
	}

	/***********************************************************
	 * Configuration Form
	 ***********************************************************/

	/**
	 * build configuration form
	 * @return string
	 */
	public function GetConfigurationForm()
	{
		// return current form
		return json_encode([
			'elements' => $this->FormHead(),
			'actions' => $this->FormActions(),
			'status' => $this->FormStatus()
		]);
	}

	/**
	 * return form configurations on configuration step
	 * @return array
	 */
	protected function FormHead()
	{
		$form = [
			[
				'name' => 'UpdateInterval',
				'type' => 'IntervalBox',
				'caption' => 'Seconds'
			]
		];
		return $form;
	}

	/**
	 * return form actions
	 * @return array
	 */
	protected function FormActions()
	{
		$form = [
			[
				'type' => 'Label',
				'label' => 'Update'
			],
			[
				'type' => 'Button',
				'label' => 'Update',
				'onClick' => 'MyStrom_DataUpdate($id);'
			]
		];
		return $form;
	}

	/**
	 * return from status
	 * @return array
	 */
	protected function FormStatus()
	{
		$form = [
			[
				'code' => 101,
				'icon' => 'inactive',
				'caption' => 'Creating instance.'
			],
			[
				'code' => 102,
				'icon' => 'active',
				'caption' => 'AirVisual created.'
			],
			[
				'code' => 104,
				'icon' => 'inactive',
				'caption' => 'interface closed.'
			],
			[
				'code' => 205,
				'icon' => 'error',
				'caption' => 'mac has not correct length'
			]
		];
		return $form;
	}

	//Add this Polyfill for IP-Symcon 4.4 and older
	protected function SetValue($Ident, $Value)
	{
		if (IPS_GetKernelVersion() >= 5) {
			parent::SetValue($Ident, $Value);
		} else {
			SetValue($this->GetIDForIdent($Ident), $Value);
		}
	}

}