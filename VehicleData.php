<?php

class ExtraInformation
{
}

class BillingAccount
{
	public $AccountType; //String

	public function getAccountType() { 
		 return $this->AccountType;
	}
    public function setAccountType($AccountType) { 
		 $this->AccountType = $AccountType; 
	}

    public function getAccountBalance() { 
		 return $this->AccountBalance; 
	}
    public function setAccountBalance($AccountBalance) { 
		 $this->AccountBalance = $AccountBalance;
	}
    public $AccountBalance; //double

    public function getTransactionCost() { 
		 return $this->TransactionCost; 
	}
    public function setTransactionCost($TransactionCost) { 
		 $this->TransactionCost = $TransactionCost; 
	}
    public $TransactionCost; //double

    public function getExtraInformation() { 
		 return $this->ExtraInformation; 
	}
    public function setExtraInformation($ExtraInformation) { 
		 $this->ExtraInformation = $ExtraInformation; 
	}
    public $ExtraInformation; //ExtraInformation

}

class TechnicalSupport
{
    public function getServerId() { 
		 return $this->ServerId; 
	}
    public function setServerId($ServerId) { 
		 $this->ServerId = $ServerId; 
	}
    public $ServerId; //String

    public function getRequestId() { 
		 return $this->RequestId; 
	}
    public function setRequestId($RequestId) { 
		 $this->RequestId = $RequestId; 
	}
    public $RequestId; //String

    public function getQueryDurationMs() { 
		 return $this->QueryDurationMs; 
	}
    public function setQueryDurationMs($QueryDurationMs) { 
		 $this->QueryDurationMs = $QueryDurationMs; 
	}
    public $QueryDurationMs; //int

    public function getSupportDate() { 
		 return $this->SupportDate; 
	}
    public function setSupportDate($SupportDate) { 
		 $this->SupportDate = $SupportDate; 
	}
    public $SupportDate; //String

    public function getSupportTime() { 
		 return $this->SupportTime; 
	}
    public function setSupportTime($SupportTime) { 
		 $this->SupportTime = $SupportTime; 
	}
    public $SupportTime; //String

    public function getSupportCode() { 
		 return $this->SupportCode; 
	}
    public function setSupportCode($SupportCode) { 
		 $this->SupportCode = $SupportCode; 
	}
    public $SupportCode; //String

}

class DataKeys
{
    public function getVrm() { 
		 return $this->Vrm; 
	}
    public function setVrm($Vrm) { 
		 $this->Vrm = $Vrm; 
	}
    public $Vrm; //String

}

class Request
{
    public function getRequestGuid() { 
		 return $this->RequestGuid; 
	}
    public function setRequestGuid($RequestGuid) { 
		 $this->RequestGuid = $RequestGuid; 
	}
    public $RequestGuid; //String

    public function getPackageId() { 
		 return $this->PackageId; 
	}
    public function setPackageId($PackageId) { 
		 $this->PackageId = $PackageId; 
	}
    public $PackageId; //String

    public function getPackageVersion() { 
		 return $this->PackageVersion; 
	}
    public function setPackageVersion($PackageVersion) { 
		 $this->PackageVersion = $PackageVersion; 
	}
    public $PackageVersion; //int

    public function getResponseVersion() { 
		 return $this->ResponseVersion; 
	}
    public function setResponseVersion($ResponseVersion) { 
		 $this->ResponseVersion = $ResponseVersion; 
	}
    public $ResponseVersion; //int

    public function getDataKeys() { 
		 return $this->DataKeys; 
	}
    public function setDataKeys($DataKeys) { 
		 $this->DataKeys = $DataKeys; 
	}
    public $DataKeys; //DataKeys

}

class Lookup
{
    public function getStatusCode() { 
		 return $this->StatusCode; 
	}
    public function setStatusCode($StatusCode) { 
		 $this->StatusCode = $StatusCode; 
	}
    public $StatusCode; //String

    public function getStatusMessage() { 
		 return $this->StatusMessage; 
	}
    public function setStatusMessage($StatusMessage) { 
		 $this->StatusMessage = $StatusMessage; 
	}
    public $StatusMessage; //String

    public function getAdviceTextList() { 
		 return $this->AdviceTextList; 
	}
    public function setAdviceTextList($AdviceTextList) { 
		 $this->AdviceTextList = $AdviceTextList; 
	}
    public $AdviceTextList; //array(Object)

}

class StatusInformation
{
    public function getLookup() { 
		 return $this->Lookup; 
	}
    public function setLookup($Lookup) { 
		 $this->Lookup = $Lookup; 
	}
    public $Lookup; //Lookup

}

class Dimensions
{
    public function getUnladenWeight() { 
		 return $this->UnladenWeight; 
	}
    public function setUnladenWeight($UnladenWeight) { 
		 $this->UnladenWeight = $UnladenWeight; 
	}
    public $UnladenWeight; //double

    public function getRigidArtic() { 
		 return $this->RigidArtic; 
	}
    public function setRigidArtic($RigidArtic) { 
		 $this->RigidArtic = $RigidArtic; 
	}
    public $RigidArtic; //String

    public function getBodyShape() { 
		 return $this->BodyShape; 
	}
    public function setBodyShape($BodyShape) { 
		 $this->BodyShape = $BodyShape; 
	}
    public $BodyShape; //String

    public function getPayloadVolume() { 
		 return $this->PayloadVolume; 
	}
    public function setPayloadVolume($PayloadVolume) { 
		 $this->PayloadVolume = $PayloadVolume; 
	}
    public $PayloadVolume; //object

    public function getPayloadWeight() { 
		 return $this->PayloadWeight; 
	}
    public function setPayloadWeight($PayloadWeight) { 
		 $this->PayloadWeight = $PayloadWeight; 
	}
    public $PayloadWeight; //object

    public function getHeight() { 
		 return $this->Height; 
	}
    public function setHeight($Height) { 
		 $this->Height = $Height; 
	}
    public $Height; //double

    public function getNumberOfDoors() { 
		 return $this->NumberOfDoors; 
	}
    public function setNumberOfDoors($NumberOfDoors) { 
		 $this->NumberOfDoors = $NumberOfDoors; 
	}
    public $NumberOfDoors; //int

    public function getNumberOfSeats() { 
		 return $this->NumberOfSeats; 
	}
    public function setNumberOfSeats($NumberOfSeats) { 
		 $this->NumberOfSeats = $NumberOfSeats; 
	}
    public $NumberOfSeats; //int

    public function getKerbWeight() { 
		 return $this->KerbWeight; 
	}
    public function setKerbWeight($KerbWeight) { 
		 $this->KerbWeight = $KerbWeight; 
	}
    public $KerbWeight; //double

    public function getGrossTrainWeight() { 
		 return $this->GrossTrainWeight; 
	}
    public function setGrossTrainWeight($GrossTrainWeight) { 
		 $this->GrossTrainWeight = $GrossTrainWeight; 
	}
    public $GrossTrainWeight; //object

    public function getFuelTankCapacity() { 
		 return $this->FuelTankCapacity; 
	}
    public function setFuelTankCapacity($FuelTankCapacity) { 
		 $this->FuelTankCapacity = $FuelTankCapacity; 
	}
    public $FuelTankCapacity; //double

    public function getLoadLength() { 
		 return $this->LoadLength; 
	}
    public function setLoadLength($LoadLength) { 
		 $this->LoadLength = $LoadLength; 
	}
    public $LoadLength; //object

    public function getDataVersionNumber() { 
		 return $this->DataVersionNumber; 
	}
    public function setDataVersionNumber($DataVersionNumber) { 
		 $this->DataVersionNumber = $DataVersionNumber; 
	}
    public $DataVersionNumber; //object

    public function getWheelBase() { 
		 return $this->WheelBase; 
	}
    public function setWheelBase($WheelBase) { 
		 $this->WheelBase = $WheelBase; 
	}
    public $WheelBase; //double

    public function getCarLength() { 
		 return $this->CarLength; 
	}
    public function setCarLength($CarLength) { 
		 $this->CarLength = $CarLength; 
	}
    public $CarLength; //double

    public function getWidth() { 
		 return $this->Width; 
	}
    public function setWidth($Width) { 
		 $this->Width = $Width; 
	}
    public $Width; //double

    public function getNumberOfAxles() { 
		 return $this->NumberOfAxles; 
	}
    public function setNumberOfAxles($NumberOfAxles) { 
		 $this->NumberOfAxles = $NumberOfAxles; 
	}
    public $NumberOfAxles; //int

    public function getGrossVehicleWeight() { 
		 return $this->GrossVehicleWeight; 
	}
    public function setGrossVehicleWeight($GrossVehicleWeight) { 
		 $this->GrossVehicleWeight = $GrossVehicleWeight; 
	}
    public $GrossVehicleWeight; //double

    public function getGrossCombinedWeight() { 
		 return $this->GrossCombinedWeight; 
	}
    public function setGrossCombinedWeight($GrossCombinedWeight) { 
		 $this->GrossCombinedWeight = $GrossCombinedWeight; 
	}
    public $GrossCombinedWeight; //object

}

class EuroNcap
{
    public function getChild() { 
		 return $this->Child; 
	}
    public function setChild($Child) { 
		 $this->Child = $Child; 
	}
    public $Child; //object

    public function getAdult() { 
		 return $this->Adult; 
	}
    public function setAdult($Adult) { 
		 $this->Adult = $Adult; 
	}
    public $Adult; //object

    public function getPedestrian() { 
		 return $this->Pedestrian; 
	}
    public function setPedestrian($Pedestrian) { 
		 $this->Pedestrian = $Pedestrian; 
	}
    public $Pedestrian; //object

}

class Safety
{
    public function getEuroNcap() { 
		 return $this->EuroNcap; 
	}
    public function setEuroNcap($EuroNcap) { 
		 $this->EuroNcap = $EuroNcap; 
	}
    public $EuroNcap; //EuroNcap

}

class Engine
{
    public function getFuelCatalyst() { 
		 return $this->FuelCatalyst; 
	}
    public function setFuelCatalyst($FuelCatalyst) { 
		 $this->FuelCatalyst = $FuelCatalyst; 
	}
    public $FuelCatalyst; //String

    public function getStroke() { 
		 return $this->Stroke; 
	}
    public function setStroke($Stroke) { 
		 $this->Stroke = $Stroke; 
	}
    public $Stroke; //double

    public function getPrimaryFuelFlag() { 
		 return $this->PrimaryFuelFlag; 
	}
    public function setPrimaryFuelFlag($PrimaryFuelFlag) { 
		 $this->PrimaryFuelFlag = $PrimaryFuelFlag; 
	}
    public $PrimaryFuelFlag; //String

    public function getValvesPerCylinder() { 
		 return $this->ValvesPerCylinder;
	}
    public function setValvesPerCylinder($ValvesPerCylinder) { 
		 $this->ValvesPerCylinder = $ValvesPerCylinder; 
	}
    public $ValvesPerCylinder; //int

    public function getAspiration() { 
		 return $this->Aspiration; 
	}
    public function setAspiration($Aspiration) { 
		 $this->Aspiration = $Aspiration; 
	}
    public $Aspiration; //String

    public function getFuelSystem() { 
		 return $this->FuelSystem; 
	}
    public function setFuelSystem($FuelSystem) { 
		 $this->FuelSystem = $FuelSystem; 
	}
    public $FuelSystem; //String

    public function getNumberOfCylinders() { 
		 return $this->NumberOfCylinders;
	}
    public function setNumberOfCylinders($NumberOfCylinders) { 
		 $this->NumberOfCylinders = $NumberOfCylinders; 
	}
    public $NumberOfCylinders; //int

    public function getCylinderArrangement() { 
		 return $this->CylinderArrangement; 
	}
    public function setCylinderArrangement($CylinderArrangement) { 
		 $this->CylinderArrangement = $CylinderArrangement; 
	}
    public $CylinderArrangement; //String

    public function getValveGear() { 
		 return $this->ValveGear; 
	}
    public function setValveGear($ValveGear) { 
		 $this->ValveGear = $ValveGear; 
	}
    public $ValveGear; //String

    public function getLocation() { 
		 return $this->Location; 
	}
    public function setLocation($Location) { 
		 $this->Location = $Location; 
	}
    public $Location; //String

    public function getDescription() { 
		 return $this->Description; 
	}
    public function setDescription($Description) { 
		 $this->Description = $Description; 
	}
    public $Description; //object

    public function getBore() { 
		 return $this->Bore; 
	}
    public function setBore($Bore) { 
		 $this->Bore = $Bore; 
	}
    public $Bore; //double

    public function getMake() { 
		 return $this->Make; 
	}
    public function setMake($Make) { 
		 $this->Make = $Make; 
	}
    public $Make; //String

    public function getFuelDelivery() { 
		 return $this->FuelDelivery; 
	}
    public function setFuelDelivery($FuelDelivery) { 
		 $this->FuelDelivery = $FuelDelivery; 
	}
    public $FuelDelivery; //String

}

class ElectricVehicleBattery
{
    public function getCapacity() { 
		 return $this->Capacity; 
	}
    public function setCapacity($Capacity) { 
		 $this->Capacity = $Capacity; 
	}
    public $Capacity; //object

    public function getChargePort() { 
		 return $this->ChargePort; 
	}
    public function setChargePort($ChargePort) { 
		 $this->ChargePort = $ChargePort; 
	}
    public $ChargePort; //object

    public function getChargeTime() { 
		 return $this->ChargeTime; 
	}
    public function setChargeTime($ChargeTime) { 
		 $this->ChargeTime = $ChargeTime; 
	}
    public $ChargeTime; //object

    public function getType() { 
		 return $this->Type; 
	}
    public function setType($Type) { 
		 $this->Type = $Type; 
	}
    public $Type; //object

}

class General
{
    public function getEngine() { 
		 return $this->Engine; 
	}
    public function setEngine($Engine) { 
		 $this->Engine = $Engine; 
	}
    public $Engine; //Engine

    public function getPowerDelivery() { 
		 return $this->PowerDelivery; 
	}
    public function setPowerDelivery($PowerDelivery) { 
		 $this->PowerDelivery = $PowerDelivery; 
	}
    public $PowerDelivery; //String

    public function getTypeApprovalCategory() { 
		 return $this->TypeApprovalCategory; 
	}
    public function setTypeApprovalCategory($TypeApprovalCategory) { 
		 $this->TypeApprovalCategory = $TypeApprovalCategory; 
	}
    public $TypeApprovalCategory; //String

    public function getElectricVehicleBattery() { 
		 return $this->ElectricVehicleBattery; 
	}
    public function setElectricVehicleBattery($ElectricVehicleBattery) { 
		 $this->ElectricVehicleBattery = $ElectricVehicleBattery; 
	}
    public $ElectricVehicleBattery; //ElectricVehicleBattery

    public function getSeriesDescription() { 
		 return $this->SeriesDescription; 
	}
    public function setSeriesDescription($SeriesDescription) { 
		 $this->SeriesDescription = $SeriesDescription; 
	}
    public $SeriesDescription; //String

    public function getDriverPosition() { 
		 return $this->DriverPosition; 
	}
    public function setDriverPosition($DriverPosition) { 
		 $this->DriverPosition = $DriverPosition; 
	}
    public $DriverPosition; //String

    public function getDrivingAxle() { 
		 return $this->DrivingAxle; 
	}
    public function setDrivingAxle($DrivingAxle) { 
		 $this->DrivingAxle = $DrivingAxle; 
	}
    public $DrivingAxle; //String

    public function getDataVersionNumber() { 
		 return $this->DataVersionNumber; 
	}
    public function setDataVersionNumber($DataVersionNumber) { 
		 $this->DataVersionNumber = $DataVersionNumber; 
	}
    public $DataVersionNumber; //object

    public function getEuroStatus() { 
		 return $this->EuroStatus; 
	}
    public function setEuroStatus($EuroStatus) { 
		 $this->EuroStatus = $EuroStatus; 
	}
    public $EuroStatus; //String

    public function getIsLimitedEdition() { 
		 return $this->IsLimitedEdition; 
	}
    public function setIsLimitedEdition($IsLimitedEdition) { 
		 $this->IsLimitedEdition = $IsLimitedEdition; 
	}
    public $IsLimitedEdition; //boolean

}

class Torque
{
    public function getFtLb() { 
		 return $this->FtLb; 
	}
    public function setFtLb($FtLb) { 
		 $this->FtLb = $FtLb; 
	}
    public $FtLb; //double

    public function getNm() { 
		 return $this->Nm; 
	}
    public function setNm($Nm) { 
		 $this->Nm = $Nm; 
	}
    public $Nm; //double

    public function getRpm() { 
		 return $this->Rpm; 
	}
    public function setRpm($Rpm) { 
		 $this->Rpm = $Rpm; 
	}
    public $Rpm; //double

}

class Power
{
    public function getBhp() { 
		 return $this->Bhp; 
	}
    public function setBhp($Bhp) { 
		 $this->Bhp = $Bhp; 
	}
    public $Bhp; //double

    public function getRpm() { 
		 return $this->Rpm; 
	}
    public function setRpm($Rpm) { 
		 $this->Rpm = $Rpm; 
	}
    public $Rpm; //double

    public function getKw() { 
		 return $this->Kw; 
	}
    public function setKw($Kw) { 
		 $this->Kw = $Kw; 
	}
    public $Kw; //double

}

class MaxSpeed
{
    public function getKph() { 
		 return $this->Kph; 
	}
    public function setKph($Kph) { 
		 $this->Kph = $Kph; 
	}
    public $Kph; //double

    public function getMph() { 
		 return $this->Mph; 
	}
    public function setMph($Mph) { 
		 $this->Mph = $Mph; 
	}
    public $Mph; //double

}

class Acceleration
{
    public function getMph() { 
		 return $this->Mph; 
	}
    public function setMph($Mph) { 
		 $this->Mph = $Mph; 
	}
    public $Mph; //double

    public function getKph() { 
		 return $this->Kph; 
	}
    public function setKph($Kph) { 
		 $this->Kph = $Kph; 
	}
    public $Kph; //object

    public function getZeroTo60Mph() { 
		 return $this->ZeroTo60Mph; 
	}
    public function setZeroTo60Mph($ZeroTo60Mph) { 
		 $this->ZeroTo60Mph = $ZeroTo60Mph; 
	}
    public $ZeroTo60Mph; //double

    public function getZeroTo100Kph() { 
		 return $this->ZeroTo100Kph; 
	}
    public function setZeroTo100Kph($ZeroTo100Kph) { 
		 $this->ZeroTo100Kph = $ZeroTo100Kph; 
	}
    public $ZeroTo100Kph; //object

}

class Performance
{
    public function getTorque() { 
		 return $this->Torque; 
	}
    public function setTorque($Torque) { 
		 $this->Torque = $Torque; 
	}
    public $Torque; //Torque

    public function getNoiseLevel() { 
		 return $this->NoiseLevel; 
	}
    public function setNoiseLevel($NoiseLevel) { 
		 $this->NoiseLevel = $NoiseLevel; 
	}
    public $NoiseLevel; //object

    public function getDataVersionNumber() { 
		 return $this->DataVersionNumber; 
	}
    public function setDataVersionNumber($DataVersionNumber) { 
		 $this->DataVersionNumber = $DataVersionNumber; 
	}
    public $DataVersionNumber; //object

    public function getPower() { 
		 return $this->Power; 
	}
    public function setPower($Power) { 
		 $this->Power = $Power; 
	}
    public $Power; //Power

    public function getMaxSpeed() { 
		 return $this->MaxSpeed; 
	}
    public function setMaxSpeed($MaxSpeed) { 
		 $this->MaxSpeed = $MaxSpeed; 
	}
    public $MaxSpeed; //MaxSpeed

    public function getCo2() { 
		 return $this->Co2; 
	}
    public function setCo2($Co2) { 
		 $this->Co2 = $Co2; 
	}
    public $Co2; //double

    public function getParticles() { 
		 return $this->Particles; 
	}
    public function setParticles($Particles) { 
		 $this->Particles = $Particles; 
	}
    public $Particles; //object

    public function getAcceleration() { 
		 return $this->Acceleration; 
	}
    public function setAcceleration($Acceleration) { 
		 $this->Acceleration = $Acceleration; 
	}
    public $Acceleration; //Acceleration

}

class ExtraUrban
{
    public function getLkm() { 
		 return $this->Lkm; 
	}
    public function setLkm($Lkm) { 
		 $this->Lkm = $Lkm; 
	}
    public $Lkm; //double

    public function getMpg() { 
		 return $this->Mpg; 
	}
    public function setMpg($Mpg) { 
		 $this->Mpg = $Mpg; 
	}
    public $Mpg; //double

}

class UrbanCold
{
    public function getLkm() { 
		 return $this->Lkm; 
	}
    public function setLkm($Lkm) { 
		 $this->Lkm = $Lkm; 
	}
    public $Lkm; //double

    public function getMpg() { 
		 return $this->Mpg; 
	}
    public function setMpg($Mpg) { 
		 $this->Mpg = $Mpg; 
	}
    public $Mpg; //double

}

class Combined
{
    public function getLkm() { 
		 return $this->Lkm; 
	}
    public function setLkm($Lkm) { 
		 $this->Lkm = $Lkm; 
	}
    public $Lkm; //double

    public function getMpg() { 
		 return $this->Mpg; 
	}
    public function setMpg($Mpg) { 
		 $this->Mpg = $Mpg; 
	}
    public $Mpg; //double

}

class Consumption
{
    public function getExtraUrban() { 
		 return $this->ExtraUrban; 
	}
    public function setExtraUrban($ExtraUrban) { 
		 $this->ExtraUrban = $ExtraUrban; 
	}
    public $ExtraUrban; //ExtraUrban

    public function getUrbanCold() { 
		 return $this->UrbanCold; 
	}
    public function setUrbanCold($UrbanCold) { 
		 $this->UrbanCold = $UrbanCold;
	}
    public $UrbanCold; //UrbanCold

    public function getCombined() { 
		 return $this->Combined; 
	}
    public function setCombined($Combined) { 
		 $this->Combined = $Combined; 
	}
    public $Combined; //Combined

}

class TechnicalDetails
{
    public function getDimensions() { 
		 return $this->Dimensions; 
	}
    public function setDimensions($Dimensions) { 
		 $this->Dimensions = $Dimensions; 
	}
    public $Dimensions; //Dimensions

    public function getSafety() { 
		 return $this->Safety; 
	}
    public function setSafety($Safety) { 
		 $this->Safety = $Safety; 
	}
    public $Safety; //Safety

    public function getGeneral() { 
		 return $this->General; 
	}
    public function setGeneral($General) { 
		 $this->General = $General; 
	}
    public $General; //General

    public function getPerformance() { 
		 return $this->Performance; 
	}
    public function setPerformance($Performance) { 
		 $this->Performance = $Performance; 
	}
    public $Performance; //Performance

    public function getConsumption() { 
		 return $this->Consumption; 
	}
    public function setConsumption($Consumption) { 
		 $this->Consumption = $Consumption; 
	}
    public $Consumption; //Consumption

}

class Mvris
{
    public function getModelCode() { 
		 return $this->ModelCode; 
	}
    public function setModelCode($ModelCode) { 
		 $this->ModelCode = $ModelCode; 
	}
    public $ModelCode; //String

    public function getMakeCode() { 
		 return $this->MakeCode; 
	}
    public function setMakeCode($MakeCode) { 
		 $this->MakeCode = $MakeCode; 
	}
    public $MakeCode; //String

}

class Smmt
{
    public function getMake() { 
		 return $this->Make; 
	}
    public function setMake($Make) { 
		 $this->Make = $Make; 
	}
    public $Make; //String

    public function getMvris() { 
		 return $this->Mvris; 
	}
    public function setMvris($Mvris) { 
		 $this->Mvris = $Mvris; 
	}
    public $Mvris; //Mvris

    public function getTrim() { 
		 return $this->Trim; 
	}
    public function setTrim($Trim) { 
		 $this->Trim = $Trim; 
	}
    public $Trim; //String

    public function getRange() { 
		 return $this->Range; 
	}
    public function setRange($Range) { 
		 $this->Range = $Range; 
	}
    public $Range; //String

}

class Dvla
{
    public function getModel() { 
		 return $this->Model; 
	}
    public function setModel($Model) { 
		 $this->Model = $Model; 
	}
    public $Model; //String

    public function getMake() { 
		 return $this->Make; 
	}
    public function setMake($Make) { 
		 $this->Make = $Make; 
	}
    public $Make; //String

}

class ClassificationDetails
{
    public function getSmmt() { 
		 return $this->Smmt; 
	}
    public function setSmmt($Smmt) { 
		 $this->Smmt = $Smmt; 
	}
    public $Smmt; //Smmt

    public function getDvla() { 
		 return $this->Dvla; 
	}
    public function setDvla($Dvla) { 
		 $this->Dvla = $Dvla; 
	}
    public $Dvla; //Dvla

}

class FirstYear
{
    public function getSixMonth() { 
		 return $this->SixMonth; 
	}
    public function setSixMonth($SixMonth) { 
		 $this->SixMonth = $SixMonth; 
	}
    public $SixMonth; //double

    public function getTwelveMonth() { 
		 return $this->TwelveMonth; 
	}
    public function setTwelveMonth($TwelveMonth) { 
		 $this->TwelveMonth = $TwelveMonth; 
	}
    public $TwelveMonth; //double

}

class YearTwoToSix
{
    public function getTwelveMonth() { 
		 return $this->TwelveMonth; 
	}
    public function setTwelveMonth($TwelveMonth) { 
		 $this->TwelveMonth = $TwelveMonth; 
	}
    public $TwelveMonth; //object

    public function getSixMonth() { 
		 return $this->SixMonth; 
	}
    public function setSixMonth($SixMonth) { 
		 $this->SixMonth = $SixMonth; 
	}
    public $SixMonth; //object

}

class PremiumVehicle
{
    public function getYearTwoToSix() { 
		 return $this->YearTwoToSix; 
	}
    public function setYearTwoToSix($YearTwoToSix) { 
		 $this->YearTwoToSix = $YearTwoToSix; 
	}
    public $YearTwoToSix; //YearTwoToSix

}

class Standard
{
    public function getSixMonth() { 
		 return $this->SixMonth; 
	}
    public function setSixMonth($SixMonth) { 
		 $this->SixMonth = $SixMonth; 
	}
    public $SixMonth; //double

    public function getTwelveMonth() { 
		 return $this->TwelveMonth; 
	}
    public function setTwelveMonth($TwelveMonth) { 
		 $this->TwelveMonth = $TwelveMonth; 
	}
    public $TwelveMonth; //double

}

class VedRate
{
    public function getFirstYear() { 
		 return $this->FirstYear; 
	}
    public function setFirstYear($FirstYear) { 
		 $this->FirstYear = $FirstYear; 
	}
    public $FirstYear; //FirstYear

    public function getPremiumVehicle() { 
		 return $this->PremiumVehicle; 
	}
    public function setPremiumVehicle($PremiumVehicle) { 
		 $this->PremiumVehicle = $PremiumVehicle; 
	}
    public $PremiumVehicle; //PremiumVehicle

    public function getStandard() { 
		 return $this->Standard; 
	}
    public function setStandard($Standard) { 
		 $this->Standard = $Standard; 
	}
    public $Standard; //Standard

}

class MotVed
{
    public function getVedRate() { 
		 return $this->VedRate; 
	}
    public function setVedRate($VedRate) { 
		 $this->VedRate = $VedRate; 
	}
    public $VedRate; //VedRate

    public function getVedCo2Emissions() { 
		 return $this->VedCo2Emissions; 
	}
    public function setVedCo2Emissions($VedCo2Emissions) { 
		 $this->VedCo2Emissions = $VedCo2Emissions; 
	}
    public $VedCo2Emissions; //double

    public function getMotDue() { 
		 return $this->MotDue; 
	}
    public function setMotDue($MotDue) { 
		 $this->MotDue = $MotDue; 
	}
    public $MotDue; //object

    public function getVedBand() { 
		 return $this->VedBand; 
	}
    public function setVedBand($VedBand) { 
		 $this->VedBand = $VedBand; 
	}
    public $VedBand; //String

    public function getVedCo2Band() { 
		 return $this->VedCo2Band; 
	}
    public function setVedCo2Band($VedCo2Band) { 
		 $this->VedCo2Band = $VedCo2Band; 
	}
    public $VedCo2Band; //String

    public function getTaxDue() { 
		 return $this->TaxDue; 
	}
    public function setTaxDue($TaxDue) { 
		 $this->TaxDue = $TaxDue; 
	}
    public $TaxDue; //object

    public function getMessage() { 
		 return $this->Message; 
	}
    public function setMessage($Message) { 
		 $this->Message = $Message; 
	}
    public $Message; //object

    public function getVehicleStatus() { 
		 return $this->VehicleStatus; 
	}
    public function setVehicleStatus($VehicleStatus) { 
		 $this->VehicleStatus = $VehicleStatus; 
	}
    public $VehicleStatus; //object

}

class VehicleStatus
{
    public function getMotVed() { 
		 return $this->MotVed; 
	}
    public function setMotVed($MotVed) { 
		 $this->MotVed = $MotVed; 
	}
    public $MotVed; //MotVed

}

class V5CCertificateList
{
    public function getCertificateDate() { 
		 return $this->CertificateDate; 
	}
    public function setCertificateDate($CertificateDate) { 
		 $this->CertificateDate = $CertificateDate; 
	}
    public $CertificateDate; //Date

}

class KeeperChangesList
{
    public function getDateOfTransaction() { 
		 return $this->DateOfTransaction; 
	}
    public function setDateOfTransaction($DateOfTransaction) { 
		 $this->DateOfTransaction = $DateOfTransaction; 
	}
    public $DateOfTransaction; //Date

    public function getNumberOfPreviousKeepers() { 
		 return $this->NumberOfPreviousKeepers; 
	}
    public function setNumberOfPreviousKeepers($NumberOfPreviousKeepers) { 
		 $this->NumberOfPreviousKeepers = $NumberOfPreviousKeepers; 
	}
    public $NumberOfPreviousKeepers; //int

    public function getDateOfLastKeeperChange() { 
		 return $this->DateOfLastKeeperChange; 
	}
    public function setDateOfLastKeeperChange($DateOfLastKeeperChange) { 
		 $this->DateOfLastKeeperChange = $DateOfLastKeeperChange; 
	}
    public $DateOfLastKeeperChange; //Date

}

class VehicleHistory
{
    public function getV5CCertificateCount() { 
		 return $this->V5CCertificateCount; 
	}
    public function setV5CCertificateCount($V5CCertificateCount) { 
		 $this->V5CCertificateCount = $V5CCertificateCount; 
	}
    public $V5CCertificateCount; //int

    public function getPlateChangeCount() { 
		 return $this->PlateChangeCount; 
	}
    public function setPlateChangeCount($PlateChangeCount) { 
		 $this->PlateChangeCount = $PlateChangeCount; 
	}
    public $PlateChangeCount; //int

    public function getNumberOfPreviousKeepers() { 
		 return $this->NumberOfPreviousKeepers; 
	}
    public function setNumberOfPreviousKeepers($NumberOfPreviousKeepers) { 
		 $this->NumberOfPreviousKeepers = $NumberOfPreviousKeepers ;
	}
    public $NumberOfPreviousKeepers; //int

    public function getV5CCertificateList() { 
		 return $this->V5CCertificateList; 
	}
    public function setV5CCertificateList($V5CCertificateList) { 
		 $this->V5CCertificateList = $V5CCertificateList; 
	}
    public $V5CCertificateList; //array(V5CCertificateList)

    public function getKeeperChangesCount() { 
		 return $this->KeeperChangesCount; 
	}
    public function setKeeperChangesCount($KeeperChangesCount) { 
		 $this->KeeperChangesCount = $KeeperChangesCount ;
	}
    public $KeeperChangesCount; //int

    public function getVicCount() { 
		 return $this->VicCount ;
	}
    public function setVicCount($VicCount) { 
		 $this->VicCount = $VicCount ;
	}
    public $VicCount; //int

    public function getColourChangeCount() { 
		 return $this->ColourChangeCount ;
	}
    public function setColourChangeCount($ColourChangeCount) { 
		 $this->ColourChangeCount = $ColourChangeCount ;
	}
    public $ColourChangeCount; //object

    public function getColourChangeList() { 
		 return $this->ColourChangeList ;
	}
    public function setColourChangeList($ColourChangeList) { 
		 $this->ColourChangeList = $ColourChangeList ;
	}
    public $ColourChangeList; //object

    public function getKeeperChangesList() { 
		 return $this->KeeperChangesList ;
	}
    public function setKeeperChangesList($KeeperChangesList) { 
		 $this->KeeperChangesList = $KeeperChangesList ;
	}
    public $KeeperChangesList; //array(KeeperChangesList)

    public function getPlateChangeList() { 
		 return $this->PlateChangeList ;
	}
    public function setPlateChangeList($PlateChangeList) { 
		 $this->PlateChangeList = $PlateChangeList ;
	}
    public $PlateChangeList; //array(Object)

    public function getVicList() { 
		 return $this->VicList ;
	}
    public function setVicList($VicList) { 
		 $this->VicList = $VicList ;
	}
    public $VicList; //object

}

class VehicleRegistration
{
    public function getDateOfLastUpdate() { 
		 return $this->DateOfLastUpdate; 
	}
    public function setDateOfLastUpdate($DateOfLastUpdate) { 
		 $this->DateOfLastUpdate = $DateOfLastUpdate ;
	}
    public $DateOfLastUpdate; //Date

    public function getColour() { 
		 return $this->Colour ;
	}
    public function setColour($Colour) { 
		 $this->Colour = $Colour ;
	}
    public $Colour; //String

    public function getVehicleClass() { 
		 return $this->VehicleClass ;
	}
    public function setVehicleClass($VehicleClass) { 
		 $this->VehicleClass = $VehicleClass ;
	}
    public $VehicleClass; //String

    public function getCertificateOfDestructionIssued() { 
		 return $this->CertificateOfDestructionIssued ;
	}
    public function setCertificateOfDestructionIssued($CertificateOfDestructionIssued) { 
		 $this->CertificateOfDestructionIssued = $CertificateOfDestructionIssued ;
	}
    public $CertificateOfDestructionIssued; //boolean

    public function getEngineNumber() { 
		 return $this->EngineNumber ;
	}
    public function setEngineNumber($EngineNumber) { 
		 $this->EngineNumber = $EngineNumber ;
	}
    public $EngineNumber; //String

    public function getEngineCapacity() { 
		 return $this->EngineCapacity ;
	}
    public function setEngineCapacity($EngineCapacity) { 
		 $this->EngineCapacity = $EngineCapacity ;
	}
    public $EngineCapacity; //String

    public function getTransmissionCode() { 
		 return $this->TransmissionCode ;
	}
    public function setTransmissionCode($TransmissionCode) { 
		 $this->TransmissionCode = $TransmissionCode ;
	}
    public $TransmissionCode; //String

    public function getExported() { 
		 return $this->Exported ;
	}
    public function setExported($Exported) { 
		 $this->Exported = $Exported ;
	}
    public $Exported; //boolean

    public function getYearOfManufacture() { 
		 return $this->YearOfManufacture ;
	}
    public function setYearOfManufacture($YearOfManufacture) { 
		 $this->YearOfManufacture = $YearOfManufacture ;
	}
    public $YearOfManufacture; //String

    public function getWheelPlan() { 
		 return $this->WheelPlan ;
	}
    public function setWheelPlan($WheelPlan) { 
		 $this->WheelPlan = $WheelPlan ;
	}
    public $WheelPlan; //String

    public function getDateExported() { 
		 return $this->DateExported ;
	}
    public function setDateExported($DateExported) { 
		 $this->DateExported = $DateExported ;
	}
    public $DateExported; //object

    public function getScrapped() { 
		 return $this->Scrapped ;
	}
    public function setScrapped($Scrapped) { 
		 $this->Scrapped = $Scrapped ;
	}
    public $Scrapped; //boolean

    public function getTransmission() { 
		 return $this->Transmission ;
	}
    public function setTransmission($Transmission) { 
		 $this->Transmission = $Transmission ;
	}
    public $Transmission; //String

    public function getDateFirstRegisteredUk() { 
		 return $this->DateFirstRegisteredUk ;
	}
    public function setDateFirstRegisteredUk($DateFirstRegisteredUk) { 
		 $this->DateFirstRegisteredUk = $DateFirstRegisteredUk ;
	}
    public $DateFirstRegisteredUk; //Date

    public function getModel() { 
		 return $this->Model ;
	}
    public function setModel($Model) { 
		 $this->Model = $Model ;
	}
    public $Model; //String

    public function getGearCount() { 
		 return $this->GearCount; 
	}
    public function setGearCount($GearCount) { 
		 $this->GearCount = $GearCount ;
	}
    public $GearCount; //int

    public function getImportNonEu() { 
		 return $this->ImportNonEu ;
	}
    public function setImportNonEu($ImportNonEu) { 
		 $this->ImportNonEu = $ImportNonEu ;
	}
    public $ImportNonEu; //boolean

    public function getPreviousVrmGb() { 
		 return $this->PreviousVrmGb ;
	}
    public function setPreviousVrmGb($PreviousVrmGb) { 
		 $this->PreviousVrmGb = $PreviousVrmGb ;
	}
    public $PreviousVrmGb; //object

    public function getGrossWeight() { 
		 return $this->GrossWeight ;
	}
    public function setGrossWeight($GrossWeight) { 
		 $this->GrossWeight = $GrossWeight ;
	}
    public $GrossWeight; //double

    public function getDoorPlanLiteral() { 
		 return $this->DoorPlanLiteral ;
	}
    public function setDoorPlanLiteral($DoorPlanLiteral) { 
		 $this->DoorPlanLiteral = $DoorPlanLiteral ;
	}
    public $DoorPlanLiteral; //String

    public function getMvrisModelCode() { 
		 return $this->MvrisModelCode ;
	}
    public function setMvrisModelCode($MvrisModelCode) { 
		 $this->MvrisModelCode = $MvrisModelCode ;
	}
    public $MvrisModelCode; //String

    public function getVin() { 
		 return $this->Vin ;
	}
    public function setVin($Vin) { 
		 $this->Vin = $Vin ;
	}
    public $Vin; //String

    public function getVrm() { 
		 return $this->Vrm ;
	}
    public function setVrm($Vrm) { 
		 $this->Vrm = $Vrm ;
	}
    public $Vrm; //String

    public function getDateFirstRegistered() { 
		 return $this->DateFirstRegistered ;
	}
    public function setDateFirstRegistered($DateFirstRegistered) { 
		 $this->DateFirstRegistered = $DateFirstRegistered ;
	}
    public $DateFirstRegistered; //Date

    public function getDateScrapped() { 
		 return $this->DateScrapped ;
	}
    public function setDateScrapped($DateScrapped) { 
		 $this->DateScrapped = $DateScrapped ;
	}
    public $DateScrapped; //object

    public function getDoorPlan() { 
		 return $this->DoorPlan ;
	}
    public function setDoorPlan($DoorPlan) { 
		 $this->DoorPlan = $DoorPlan; 
	}
    public $DoorPlan; //String

    public function getYearMonthFirstRegistered() { 
		 return $this->YearMonthFirstRegistered ;
	}
    public function setYearMonthFirstRegistered($YearMonthFirstRegistered) { 
		 $this->YearMonthFirstRegistered = $YearMonthFirstRegistered ;
	}
    public $YearMonthFirstRegistered; //String

    public function getVinLast5() { 
		 return $this->VinLast5 ;
	}
    public function setVinLast5($VinLast5) { 
		 $this->VinLast5 = $VinLast5 ;
	}
    public $VinLast5; //String

    public function getVehicleUsedBeforeFirstRegistration() { 
		 return $this->VehicleUsedBeforeFirstRegistration ;
	}
    public function setVehicleUsedBeforeFirstRegistration($VehicleUsedBeforeFirstRegistration) { 
		 $this->VehicleUsedBeforeFirstRegistration = $VehicleUsedBeforeFirstRegistration ;
	}
    public $VehicleUsedBeforeFirstRegistration; //boolean

    public function getMaxPermissibleMass() { 
		 return $this->MaxPermissibleMass ;
	}
    public function setMaxPermissibleMass($MaxPermissibleMass) { 
		 $this->MaxPermissibleMass = $MaxPermissibleMass ;
	}
    public $MaxPermissibleMass; //double

    public function getMake() { 
		 return $this->Make ;
	}
    public function setMake($Make) { 
		 $this->Make = $Make ;
	}
    public $Make; //String

    public function getMakeModel() { 
		 return $this->MakeModel ;
	}
    public function setMakeModel($MakeModel) { 
		 $this->MakeModel = $MakeModel ;
	}
    public $MakeModel; //String

    public function getTransmissionType() { 
		 return $this->TransmissionType ;
	}
    public function setTransmissionType($TransmissionType) { 
		 $this->TransmissionType = $TransmissionType ;
	}
    public $TransmissionType; //String

    public function getSeatingCapacity() { 
		 return $this->SeatingCapacity ;
	}
    public function setSeatingCapacity($SeatingCapacity) { 
		 $this->SeatingCapacity = $SeatingCapacity ;
	}
    public $SeatingCapacity; //int

    public function getFuelType() { 
		 return $this->FuelType ;
	}
    public function setFuelType($FuelType) { 
		 $this->FuelType = $FuelType ;
	}
    public $FuelType; //String

    public function getCo2Emissions() { 
		 return $this->Co2Emissions ;
	}
    public function setCo2Emissions($Co2Emissions) { 
		 $this->Co2Emissions = $Co2Emissions ;
	}
    public $Co2Emissions; //double

    public function getImported() { 
		 return $this->Imported ;
	}
    public function setImported($Imported) { 
		 $this->Imported = $Imported ;
	}
    public $Imported; //boolean

    public function getMvrisMakeCode() { 
		 return $this->MvrisMakeCode ;
	}
    public function setMvrisMakeCode($MvrisMakeCode) { 
		 $this->MvrisMakeCode = $MvrisMakeCode ;
	}
    public $MvrisMakeCode; //String

    public function getPreviousVrmNi() { 
		 return $this->PreviousVrmNi ;
	}
    public function setPreviousVrmNi($PreviousVrmNi) { 
		 $this->PreviousVrmNi = $PreviousVrmNi ;
	}
    public $PreviousVrmNi; //object

    public function getVinConfirmationFlag() { 
		 return $this->VinConfirmationFlag ;
	}
    public function setVinConfirmationFlag($VinConfirmationFlag) { 
		 $this->VinConfirmationFlag = $VinConfirmationFlag ;
	}
    public $VinConfirmationFlag; //object

}

class SmmtDetails
{
    public function getRange() { 
		 return $this->Range ;
	}
    public function setRange($Range) { 
		 $this->Range = $Range; 
	}
    public $Range; //String

    public function getFuelType() { 
		 return $this->FuelType; 
	}
    public function setFuelType($FuelType) { 
		 $this->FuelType = $FuelType ;
	}
    public $FuelType; //String

    public function getEngineCapacity() { 
		 return $this->EngineCapacity ;
	}
    public function setEngineCapacity($EngineCapacity) { 
		 $this->EngineCapacity = $EngineCapacity ;
	}
    public $EngineCapacity; //String

    public function getMarketSectorCode() { 
		 return $this->MarketSectorCode ;
	}
    public function setMarketSectorCode($MarketSectorCode) { 
		 $this->MarketSectorCode = $MarketSectorCode ;
	}
    public $MarketSectorCode; //String

    public function getCountryOfOrigin() { 
		 return $this->CountryOfOrigin ;
	}
    public function setCountryOfOrigin($CountryOfOrigin) { 
		 $this->CountryOfOrigin = $CountryOfOrigin ;
	}
    public $CountryOfOrigin; //String

    public function getModelCode() { 
		 return $this->ModelCode ;
	}
    public function setModelCode($ModelCode) { 
		 $this->ModelCode = $ModelCode ;
	}
    public $ModelCode; //String

    public function getModelVariant() { 
		 return $this->ModelVariant ;
	}
    public function setModelVariant($ModelVariant) { 
		 $this->ModelVariant = $ModelVariant ;
	}
    public $ModelVariant; //String

    public function getDataVersionNumber() { 
		 return $this->DataVersionNumber ;
	}
    public function setDataVersionNumber($DataVersionNumber) { 
		 $this->DataVersionNumber = $DataVersionNumber ;
	}
    public $DataVersionNumber; //object

    public function getNumberOfGears() { 
		 return $this->NumberOfGears ;
	}
    public function setNumberOfGears($NumberOfGears) { 
		 $this->NumberOfGears = $NumberOfGears ;
	}
    public $NumberOfGears; //int

    public function getNominalEngineCapacity() { 
		 return $this->NominalEngineCapacity ;
	}
    public function setNominalEngineCapacity($NominalEngineCapacity) { 
		 $this->NominalEngineCapacity = $NominalEngineCapacity ;
	}
    public $NominalEngineCapacity; //double

    public function getMarqueCode() { 
		 return $this->MarqueCode ;
	}
    public function setMarqueCode($MarqueCode) { 
		 $this->MarqueCode = $MarqueCode ;
	}
    public $MarqueCode; //String

    public function getTransmission() { 
		 return $this->Transmission ;
	}
    public function setTransmission($Transmission) { 
		 $this->Transmission = $Transmission ;
	}
    public $Transmission; //String

    public function getBodyStyle() { 
		 return $this->BodyStyle ;
	}
    public function setBodyStyle($BodyStyle) { 
		 $this->BodyStyle = $BodyStyle ;
	}
    public $BodyStyle; //String

    public function getVisibilityDate() { 
		 return $this->VisibilityDate ;
	}
    public function setVisibilityDate($VisibilityDate) { 
		 $this->VisibilityDate = $VisibilityDate ;
	}
    public $VisibilityDate; //String

    public function getSysSetupDate() { 
		 return $this->SysSetupDate ;
	}
    public function setSysSetupDate($SysSetupDate) { 
		 $this->SysSetupDate = $SysSetupDate ;
	}
    public $SysSetupDate; //String

    public function getMarque() { 
		 return $this->Marque ;
	}
    public function setMarque($Marque) { 
		 $this->Marque = $Marque ;
	}
    public $Marque; //String

    public function getCabType() { 
		 return $this->CabType ;
	}
    public function setCabType($CabType) { 
		 $this->CabType = $CabType; 
	}
    public $CabType; //String

    public function getTerminateDate() { 
		 return $this->TerminateDate; 
	}
    public function setTerminateDate($TerminateDate) { 
		 $this->TerminateDate = $TerminateDate ;
	}
    public $TerminateDate; //object

    public function getSeries() { 
		 return $this->Series ;
	}
    public function setSeries($Series) { 
		 $this->Series = $Series ;
	}
    public $Series; //String

    public function getNumberOfDoors() { 
		 return $this->NumberOfDoors; 
	}
    public function setNumberOfDoors($NumberOfDoors) { 
		 $this->NumberOfDoors = $NumberOfDoors ;
	}
    public $NumberOfDoors; //int

    public function getDriveType() { 
		 return $this->DriveType ;
	}
    public function setDriveType($DriveType) { 
		 $this->DriveType = $DriveType; 
	}
    public $DriveType; //String

}

class DataItems
{
    public function getTechnicalDetails() { 
		 return $this->TechnicalDetails; 
	}
    public function setTechnicalDetails($TechnicalDetails) { 
		 $this->TechnicalDetails = $TechnicalDetails ;
	}
    public $TechnicalDetails; //TechnicalDetails

    public function getClassificationDetails() { 
		 return $this->ClassificationDetails ;
	}
    public function setClassificationDetails($ClassificationDetails) { 
		 $this->ClassificationDetails = $ClassificationDetails ;
	}
    public $ClassificationDetails; //ClassificationDetails

    public function getVehicleStatus() { 
		 return $this->VehicleStatus ;
	}
    public function setVehicleStatus($VehicleStatus) { 
		 $this->VehicleStatus = $VehicleStatus; 
	}
    public $VehicleStatus; //VehicleStatus

    public function getVehicleHistory() { 
		 return $this->VehicleHistory ;
	}
    public function setVehicleHistory($VehicleHistory) { 
		 $this->VehicleHistory = $VehicleHistory ;
	}
    public $VehicleHistory; //VehicleHistory

    public function getVehicleRegistration() { 
		 return $this->VehicleRegistration ;
	}
    public function setVehicleRegistration($VehicleRegistration) { 
		 $this->VehicleRegistration = $VehicleRegistration ;
	}
    public $VehicleRegistration; //VehicleRegistration

    public function getSmmtDetails() { 
		 return $this->SmmtDetails ;
	}
    public function setSmmtDetails($SmmtDetails) { 
		 $this->SmmtDetails = $SmmtDetails ;
	}
    public $SmmtDetails; //SmmtDetails

}

class Response
{
    public function getStatusCode() { 
		 return $this->StatusCode ;
	}
    public function setStatusCode($StatusCode) { 
		 $this->StatusCode = $StatusCode ;
	}
    public $StatusCode; //String

    public function getStatusMessage() { 
		 return $this->StatusMessage ;
	}
    public function setStatusMessage($StatusMessage) { 
		 $this->StatusMessage = $StatusMessage ;
	}
    public $StatusMessage; //String

    public function getStatusInformation() { 
		 return $this->StatusInformation ;
	}
    public function setStatusInformation($StatusInformation) { 
		 $this->StatusInformation = $StatusInformation ;
	}
    public $StatusInformation; //StatusInformation

    public function getDataItems() { 
		 return $this->DataItems ;
	}
    public function setDataItems($DataItems) { 
		 $this->DataItems = $DataItems; 
	}
    public $DataItems; //DataItems

}

class VehicleDataV2
{
    public function getBillingAccount() { 
		 return $this->BillingAccount ;
	}
    public function setBillingAccount($BillingAccount) { 
		 $this->BillingAccount = $BillingAccount ;
	}
    public $BillingAccount; //BillingAccount

    public function getTechnicalSupport() { 
		 return $this->TechnicalSupport ;
	}
    public function setTechnicalSupport($TechnicalSupport) { 
		 $this->TechnicalSupport = $TechnicalSupport ;
	}
    public $TechnicalSupport; //TechnicalSupport

    public function getRequest() { 
		 return $this->Request ;
	}
    public function setRequest($Request) { 
		 $this->Request = $Request; 
	}
    public $Request; //Request

    public function getResponse() { 
		 return $this->Response ;
	}
    public function setResponse($Response) { 
		 $this->Response = $Response ;
	}
    public $Response; //Response

}
?>