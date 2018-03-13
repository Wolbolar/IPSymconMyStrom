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

require_once(__DIR__ . "/../bootstrap.php");

use Fonzo\IPS\IPSVarType;

// module for AirVisual

class MyStrom extends IPSModule
{

	public function Create()
	{
		//Never delete this line!
		parent::Create();

		//These lines are parsed on Symcon Startup or Instance creation
		//You cannot use variables here. Just static values.
		$this->RegisterPropertyInteger('devicetype', -1);
		$this->RegisterPropertyString('ip', '');
		$this->RegisterPropertyString('mac', '');
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
		$ip = $this->ReadPropertyString('ip');
		$mac = $this->ReadPropertyString('mac');
		$devicetype = $this->ReadPropertyInteger('devicetype');


		// check ip
		if (!filter_var($ip, FILTER_VALIDATE_IP) === false)
		{
			//IP ok
			$ipcheck = true;
		}
		else
		{
			$ipcheck = false;
		}
		$mac = strtoupper(str_replace(":", "", $mac));
		$mac_length = strlen($mac);
		if ($mac_length != 12)
		{
			//IP ok
			$this->SetStatus(205); // mac has not correct length
		}

		if($ipcheck == true && $mac_length == 12)
		{
			if($devicetype == 0) // switch
			{
				$this->RegisterVariableBoolean("status", $this->Translate("State"), "~Switch", 1);
				$this->EnableAction("status");
			}elseif($devicetype == 1) // bulb
			{
				$this->RegisterVariableBoolean("status", $this->Translate("State"), "~Switch", 1);
				$this->EnableAction("status");
				$associations = Array(
					Array(0, $this->Translate("White"), "", 0xFFFFFF), // white
					Array(1, $this->Translate("Red"), "", 0xFF0000), // red
					Array(2, $this->Translate("Green"), "", 0x00FF00), // green
					Array(3, $this->Translate("Blue"), "", 0x0000FF) // blue
				);
				$this->RegisterProfileAssociation("MyStrom.Color", "Bulb", "", "", 0, 3, 0, 0, IPSVarType::vtInteger, $associations);
				$this->RegisterVariableInteger("colorfix", $this->Translate("Color Selection"), "MyStrom.Color", 2);
				$this->EnableAction("colorfix");
				$this->RegisterVariableInteger("color", $this->Translate("Color"), "~HexColor", 2); // Color Hex, integer
				$this->EnableAction("color");
				$this->RegisterProfile("MyStrom.Hue", "Light", "", "", 0, 359, 1, 0, IPSVarType::vtInteger);
				$this->RegisterVariableInteger("hue", $this->Translate("Hue"), "MyStrom.Hue", 3); // Hue (0-359 ?), integer
				$this->EnableAction("hue");
				$this->RegisterVariableInteger("saturation", $this->Translate("Saturation"), "~Intensity.100", 4); // Saturation (0-100)
				$this->EnableAction("saturation");
				$this->RegisterVariableInteger("brightness", $this->Translate("Brightness"), "~Intensity.100", 5); // Brightness (0-100)
				$this->EnableAction("brightness");
			}
            $this->SetUpdateIntervall();
			// Status Aktiv
			$this->SetStatus(102);
		}
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
        $this->GetCurrentState();
    }


    public function GetCurrentState()
    {
        $payload = $this->Send("get_current_state");
        $this->SendDebug("MyStrom Response", $payload, 0);
        $data = json_decode($payload, true);
        $this->WriteVariables($data);
        return $payload;
    }

	protected function WriteVariables($data)
	{
		$devicetype = $this->ReadPropertyInteger('devicetype');
		$mac = key($data);
		$this->SendDebug("MyStrom MAC", $mac, 0);
		if($devicetype == 0) // switch
		{
			if(isset($data[$mac]["on"]))
			{
				$status = $data[$mac]["on"];
				$this->SendDebug("MyStrom Status", $status, 0);
				$this->SetValue("status", $status);
			}
		}
		elseif($devicetype == 1) // bulb
		{
			if(isset($data[$mac]["on"]))
			{
				$status = $data[$mac]["on"];
				$this->SendDebug("MyStrom Status", $status, 0);
				$this->SetValue("status", $status);
			}
			if(isset($data[$mac]["type"]))
			{
				$type = $data[$mac]["type"];
				$this->SendDebug("MyStrom Type", $type, 0);
			}
			if(isset($data[$mac]["battery"]))
			{
				$battery = $data[$mac]["battery"];
				$this->SendDebug("MyStrom Battery", $battery, 0);
			}
			if(isset($data[$mac]["reachable"]))
			{
				$reachable = $data[$mac]["reachable"];
				$this->SendDebug("MyStrom Reachable", $reachable, 0);
			}
			if(isset($data[$mac]["meshroot"]))
			{
				$meshroot = $data[$mac]["meshroot"];
				$this->SendDebug("MyStrom Meshroot", $meshroot, 0);
			}
			if(isset($data[$mac]["color"]))
			{
				$color = $data[$mac]["color"];
				$color = explode(";", $color);
				$hue = $color[0];
				$sat = $color[1];
				$bri = $color[2];

				$this->SendDebug("MyStrom Color", "Hue: ".$hue, 0);
				$this->SendDebug("MyStrom Color", "Saturation: ".$sat, 0);
				$this->SendDebug("MyStrom Color", "Brightness: ".$bri, 0);
			}
			if(isset($data[$mac]["power"]))
			{
				$power = $data[$mac]["power"];
				$this->SendDebug("MyStrom Power", $power, 0);
			}
			if(isset($data[$mac]["fw_version"]))
			{
				$fw_version = $data[$mac]["fw_version"];
				$this->SendDebug("MyStrom Firmware", $fw_version, 0);
			}
		}
	}

	public function PowerOn()
	{
		$this->SetValue("status", true);
		$command = "action=on";
		$result = $this->Send( $command);
		return $result;
	}

	public function PowerOff()
	{
		$this->SetValue("status", false);
		$command = "action=off";
		$result = $this->Send($command);
		return $result;
	}

	public function Toggle()
	{
		$status = GetValue($this->GetIDForIdent("status"));
		if($status)
		{
			$this->SetValue("status", false);
		}
		else{
			$this->SetValue("status", true);
		}
		$command = "action=toggle";
		$result = $this->Send($command);
		return $result;
	}

	public function DimTo(string $color, int $ramptime)
	{
		$command = "action=on&ramp=".$ramptime."&color=".$color;
		$result = $this->Send( $command);
		return $result;
	}

	public function White()
	{
		// $color = "FF000000";
		// $command = "color=".$color;
		$this->SetValue("colorfix", 0);
		$hexcolor = hexdec("000000");
		$result = $this->SetColor($hexcolor);
		return $result;
	}

	public function Red()
	{
		// $color = "00FF0000";
		// $command = "color=".$color;
		$this->SetValue("colorfix", 1);
		$hexcolor = hexdec("FF0000");
		$result = $this->SetColor($hexcolor);
		return $result;
	}

	public function Green()
	{
		// $color = "0000FF00";
		// $command = "color=".$color;
		$this->SetValue("colorfix", 2);
		$hexcolor = hexdec("00FF00");
		$result = $this->SetColor($hexcolor);
		return $result;
	}

	public function Blue()
	{
		// $color = "000000FF";
		// $command = "color=".$color;
		$this->SetValue("colorfix", 3);
		$hexcolor = hexdec("0000FF");
		$result = $this->SetColor($hexcolor);
		return $result;
	}

	public function SetColor(int $hexcolor)
	{
		$hex = str_pad(dechex($hexcolor), 6, 0, STR_PAD_LEFT);
		$hsv = $this->HEX2HSV($hex);
		$this->SetValue("color", $hexcolor);
		$hue = $hsv['h'];
		$saturation = $hsv['s'];
		$brightness = $hsv['v'];
		$result = $this->HSV($hue, $saturation, $brightness);
		return $result;
	}

	protected function GetHSB()
	{
		$hue = GetValue($this->GetIDForIdent("hue"));
		$saturation = GetValue($this->GetIDForIdent("saturation"));
		$brightness = GetValue($this->GetIDForIdent("brightness"));
		$hsb = array ("hue" => $hue, "saturation" => $saturation, "brightness" => $brightness);
		return $hsb;
	}

	protected function GetColor()
	{
		$color = $this->GetIDForIdent("color");
		return $color;
	}

	protected function HEX2HSV($hex)
	{
		$r = substr($hex, 0, 2);
		$g = substr($hex, 2, 2);
		$b = substr($hex, 4, 2);
		return $this->RGB2HSV(hexdec($r), hexdec($g), hexdec($b));
	}

	protected function HSV2HEX($h, $s, $v)
	{
		$rgb = $this->HSV2RGB($h, $s, $v);
		$r = str_pad(dechex($rgb['r']), 2, 0, STR_PAD_LEFT);
		$g = str_pad(dechex($rgb['g']), 2, 0, STR_PAD_LEFT);
		$b = str_pad(dechex($rgb['b']), 2, 0, STR_PAD_LEFT);
		return $r.$g.$b;
	}

	protected function RGB2HSV($r, $g, $b)
	{
		if (!($r >= 0 && $r <= 255))
			$this->SendDebug("MyStrom:", "h property must be between 0 and 255, but is: ". $r, 0);
		if (!($g >= 0 && $g <= 255))
			$this->SendDebug("MyStrom:", "s property must be between 0 and 255, but is: ". $g, 0);
		if (!($b >= 0 && $b <= 255))
			$this->SendDebug("MyStrom:", "v property must be between 0 and 255, but is: ". $b, 0);
		$r = ($r / 255);
		$g = ($g / 255);
		$b = ($b / 255);
		$maxRGB = max($r, $g, $b);
		$minRGB = min($r, $g, $b);
		$chroma = $maxRGB - $minRGB;
		$v = $maxRGB * 100; // $v 0 - 100
		if ($chroma == 0)
		{
			return array('h' => 0, 's' => 0, 'v' => $v);
		}
		$s = ($chroma / $maxRGB) * 100; // $s 0 - 100
		if ($r == $minRGB)
		{
			$h = 3 - (($g - $b) / $chroma);
		}
		elseif ($b == $minRGB)
		{
			$h = 1 - (($r - $g) / $chroma);
		}
		else
		{// $g == $minRGB
			$h = 5 - (($b - $r) / $chroma);
		}
		$h = $h / 6 * 360; // 0 - 359
		return array('h' => round($h), 's' => round($s), 'v' => round($v));
	}

	protected function HSV2RGB($h, $s, $v)
	{
		if (!($h >= 0 && $h <= 359))
			$this->SendDebug("MyStrom:", "h property must be between 0 and 359, but is: ". $h, 0);
		if (!($s >= 0 && $s <= 100))
			$this->SendDebug("MyStrom:", "s property must be between 0 and 100, but is:". $s, 0);
		if (!($v >= 0 && $v <= 100))
			$this->SendDebug("MyStrom:", "v property must be between 0 and 100, but is:". $v, 0);
		$h = $h * 6 / 360;
		$s = $s / 100;
		$v = $v / 100;
		$i = floor($h);
		$f = $h - $i;
		$m = $v * (1 - $s);
		$n = $v * (1 - $s * $f);
		$k = $v * (1 - $s * (1 - $f));
		switch ($i) {
			case 0:
				list($r, $g, $b) = array($v, $k, $m);
				break;
			case 1:
				list($r, $g, $b) = array($n, $v, $m);
				break;
			case 2:
				list($r, $g, $b) = array($m, $v, $k);
				break;
			case 3:
				list($r, $g, $b) = array($m, $n, $v);
				break;
			case 4:
				list($r, $g, $b) = array($k, $m, $v);
				break;
			case 5:
			case 6:
				list($r, $g, $b) = array($v, $m, $n);
				break;
		}
		$r = round($r * 255);
		$g = round($g * 255);
		$b = round($b * 255);
		return array('r' => $r, 'g' => $g, 'b' => $b);
	}

	protected function SetHexColor()
	{
		$hsb = $this->GetHSB();
		$hex = $this->HSV2HEX($hsb["hue"], $hsb["saturation"], $hsb["brightness"]);
		$hexcolor = hexdec($hex);
		$this->SetValue("color", $hexcolor);
	}

	public function SetBrightness(int $brightness)
	{
		$h = GetValue($this->GetIDForIdent("hue"));
		$s = GetValue($this->GetIDForIdent("saturation"));
		$command = "color=".$h.";".$s.";".$brightness;
		$result = $this->Send($command);
		$this->SetValue("brightness", $brightness);
		$this->SetHexColor();
		return $result;
	}

	public function GetBrightness()
	{
		$payload = $this->Send( "get_current_state");
		$this->SendDebug("MyStrom Response", $payload, 0);
		$data = json_decode($payload, true);
		$mac = key($data);
		$this->SendDebug("MyStrom MAC", $mac, 0);
		if(isset($data[$mac]["color"])) {
			$color = $data[$mac]["color"];
			$color = explode(";", $color);
			$hue = $color[0];
			$sat = $color[1];
			$bri = $color[2];

			$this->SendDebug("MyStrom Color", "Hue: " . $hue, 0);
			$this->SendDebug("MyStrom Color", "Saturation: " . $sat, 0);
			$this->SendDebug("MyStrom Color", "Brightness: " . $bri, 0);
			$this->SetValue("brightness", $bri);
			return $bri;
		}
		return false;
	}

	public function SetHue(int $hue)
	{
		$s = GetValue($this->GetIDForIdent("saturation"));
		$v = GetValue($this->GetIDForIdent("brightness"));
		$command = "color=".$hue.";".$s.";".$v;
		$result = $this->Send($command);
		$this->SetValue("hue", $hue);
		$this->SetHexColor();
		return $result;
	}

	public function GetHue()
	{
		$payload = $this->Send( "get_current_state");
		$this->SendDebug("MyStrom Response", $payload, 0);
		$data = json_decode($payload, true);
		$mac = key($data);
		$this->SendDebug("MyStrom MAC", $mac, 0);
		if(isset($data[$mac]["color"])) {
			$color = $data[$mac]["color"];
			$color = explode(";", $color);
			$hue = $color[0];
			$sat = $color[1];
			$bri = $color[2];

			$this->SendDebug("MyStrom Color", "Hue: " . $hue, 0);
			$this->SendDebug("MyStrom Color", "Saturation: " . $sat, 0);
			$this->SendDebug("MyStrom Color", "Brightness: " . $bri, 0);
			$this->SetValue("hue", $hue);
			return $hue;
		}
		return false;
	}

	public function SetSaturation(int $sat)
	{
		$h = GetValue($this->GetIDForIdent("hue"));
		$v = GetValue($this->GetIDForIdent("brightness"));
		$command = "color=".$h.";".$sat.";".$v;
		$result = $this->Send($command);
		$this->SetValue("saturation", $sat);
		$this->SetHexColor();
		return $result;
	}

	public function GetSaturation()
	{
		$payload = $this->Send("get_current_state");
		$this->SendDebug("MyStrom Response", $payload, 0);
		$data = json_decode($payload, true);
		$mac = key($data);
		$this->SendDebug("MyStrom MAC", $mac, 0);
			if(isset($data[$mac]["color"])) {
				$color = $data[$mac]["color"];
				$color = explode(";", $color);
				$hue = $color[0];
				$sat = $color[1];
				$bri = $color[2];

				$this->SendDebug("MyStrom Color", "Hue: " . $hue, 0);
				$this->SendDebug("MyStrom Color", "Saturation: " . $sat, 0);
				$this->SendDebug("MyStrom Color", "Brightness: " . $bri, 0);
				$this->SetValue("saturation", $sat);
				return $sat;
			}
		return false;
	}

	public function HSV($h, $s, $v)
	{
		$command = "color=".$h.";".$s.";".$v;
		$this->SetValue("hue", $h);
		$this->SetValue("saturation", $s);
		$this->SetValue("brightness", $v);
		$result = $this->Send($command);
		return $result;
	}



    function Send($command)
    {
        $ip = $this->ReadPropertyString('ip');
        $mac = $this->ReadPropertyString('mac');
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
    }

	public function RequestAction($Ident, $Value)
	{
		switch ($Ident) {
			case "status":
				if($Value)
				{
					$this->PowerOn();
				}
				else{
					$this->PowerOff();
				}
				break;
			case "colorfix":
				if($Value == 0)
				{
					$this->White();
				}
				elseif($Value == 1){
					$this->Red();
				}
				elseif($Value == 2){
					$this->Green();
				}
				elseif($Value == 3){
					$this->Blue();
				}
				break;
			case "hue":
				$this->SetHue($Value);
				break;
			case "saturation":
				$this->SetSaturation($Value);
				break;
			case "brightness":
				$this->SetBrightness($Value);
				break;
			case "color":
				$this->SetColor($Value);
				break;
			default:
				$this->SendDebug("MyStrom", "Invalid ident", 0);
		}
	}

	/**
	 * gets current IP-Symcon version
	 * @return float|int
	 */
	protected function GetIPSVersion()
	{
		$ipsversion = floatval(IPS_GetKernelVersion());
		if ($ipsversion < 4.1) // 4.0
		{
			$ipsversion = 0;
		} elseif ($ipsversion >= 4.1 && $ipsversion < 4.2) // 4.1
		{
			$ipsversion = 1;
		} elseif ($ipsversion >= 4.2 && $ipsversion < 4.3) // 4.2
		{
			$ipsversion = 2;
		} elseif ($ipsversion >= 4.3 && $ipsversion < 4.4) // 4.3
		{
			$ipsversion = 3;
		} elseif ($ipsversion >= 4.4 && $ipsversion < 5) // 4.4
		{
			$ipsversion = 4;
		} else   // 5
		{
			$ipsversion = 5;
		}

		return $ipsversion;
	}

	//Profile
	protected function RegisterProfile($Name, $Icon, $Prefix, $Suffix, $MinValue, $MaxValue, $StepSize, $Digits, $Vartype)
	{

		if (!IPS_VariableProfileExists($Name)) {
			IPS_CreateVariableProfile($Name, $Vartype); // 0 boolean, 1 int, 2 float, 3 string,
		} else {
			$profile = IPS_GetVariableProfile($Name);
			if ($profile['ProfileType'] != $Vartype)
				$this->SendDebug("MyStrom:", "Variable profile type does not match for profile " . $Name, 0);
		}

		IPS_SetVariableProfileIcon($Name, $Icon);
		IPS_SetVariableProfileText($Name, $Prefix, $Suffix);
		IPS_SetVariableProfileDigits($Name, $Digits); //  Nachkommastellen
		IPS_SetVariableProfileValues($Name, $MinValue, $MaxValue, $StepSize); // string $ProfilName, float $Minimalwert, float $Maximalwert, float $Schrittweite
	}

	protected function RegisterProfileAssociation($Name, $Icon, $Prefix, $Suffix, $MinValue, $MaxValue, $Stepsize, $Digits, $Vartype, $Associations)
	{
		if (sizeof($Associations) === 0) {
			$MinValue = 0;
			$MaxValue = 0;
		}

		$this->RegisterProfile($Name, $Icon, $Prefix, $Suffix, $MinValue, $MaxValue, $Stepsize, $Digits, $Vartype);

		//boolean IPS_SetVariableProfileAssociation ( string $ProfilName, float $Wert, string $Name, string $Icon, integer $Farbe )
		foreach ($Associations as $Association) {
			IPS_SetVariableProfileAssociation($Name, $Association[0], $Association[1], $Association[2], $Association[3]);
		}

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