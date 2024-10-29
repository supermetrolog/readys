<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CIndustry
 *
 * @ORM\Table(name="c_industry", indexes={@ORM\Index(name="clyent_id", columns={"clyent_id"}), @ORM\Index(name="print", columns={"id", "object_class", "region", "direction", "highway", "facing_type", "water", "sewage", "heating", "ventilation", "deleted"}), @ORM\Index(name="fias_houses_id", columns={"fias_houses_id"}), @ORM\Index(name="area_max", columns={"area_max"}), @ORM\Index(name="area_max_sale", columns={"area_max_sale"}), @ORM\Index(name="t_area", columns={"t_area"}), @ORM\Index(name="area_min", columns={"area_min"}), @ORM\Index(name="area_min_sale", columns={"area_min_sale"}), @ORM\Index(name="_calc_rent_ceiling_height", columns={"_calc_rent_ceiling_height"}), @ORM\Index(name="_calc_rent_ceiling_height2", columns={"_calc_rent_ceiling_height2"}), @ORM\Index(name="_calc_sale_ceiling_height", columns={"_calc_sale_ceiling_height"}), @ORM\Index(name="_calc_sale_ceiling_height2", columns={"_calc_sale_ceiling_height2"}), @ORM\Index(name="_calc_rent_gate_type", columns={"_calc_rent_gate_type"}), @ORM\Index(name="_calc_sale_gate_type", columns={"_calc_sale_gate_type"}), @ORM\Index(name="_calc_rent_floor_type", columns={"_calc_rent_floor_type"}), @ORM\Index(name="_calc_sale_floor_type", columns={"_calc_sale_floor_type"}), @ORM\Index(name="_calc_rent_heated", columns={"_calc_rent_heated"}), @ORM\Index(name="_calc_sale_heated", columns={"_calc_sale_heated"}), @ORM\Index(name="deleted", columns={"deleted"}), @ORM\Index(name="deal_type", columns={"deal_type"}), @ORM\Index(name="object_type2", columns={"object_type2"}), @ORM\Index(name="metro_id_deleted", columns={"metro", "id", "deleted"}), @ORM\Index(name="metro", columns={"metro"}), @ORM\Index(name="yandex_address_str_address", columns={"yandex_address_str", "address"}), @ORM\Index(name="yandex_address_str", columns={"yandex_address_str"}), @ORM\Index(name="address", columns={"address"})})
 * @ORM\Entity(repositoryClass="DefaultBundle\Repository\CIndustryRepository")
 */
class CIndustry
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_insert", type="date", nullable=true)
     */
    private $dtInsert;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_export", type="datetime", nullable=true)
     */
    private $dtExport;

    /**
     * @var integer
     *
     * @ORM\Column(name="clyent_id", type="integer", nullable=true)
     */
    private $clyentId;

    /**
     * @var string
     *
     * @ORM\Column(name="object_type2", type="string", length=100, nullable=true)
     */
    private $objectType2;

    /**
     * @var string
     *
     * @ORM\Column(name="purpose_warehouse", type="string", length=100, nullable=true)
     */
    private $purposeWarehouse;

    /**
     * @var integer
     *
     * @ORM\Column(name="firefighting", type="integer", nullable=true)
     */
    private $firefighting;

    /**
     * @var integer
     *
     * @ORM\Column(name="object_class", type="integer", nullable=false)
     */
    private $objectClass;

    /**
     * @var integer
     *
     * @ORM\Column(name="region", type="integer", nullable=false)
     */
    private $region;

    /**
     * @var integer
     *
     * @ORM\Column(name="district", type="integer", nullable=false)
     */
    private $district;

    /**
     * @var integer
     *
     * @ORM\Column(name="direction", type="integer", nullable=false)
     */
    private $direction;

    /**
     * @var integer
     *
     * @ORM\Column(name="village", type="integer", nullable=false)
     */
    private $village;

    /**
     * @var integer
     *
     * @ORM\Column(name="highway", type="integer", nullable=false)
     */
    private $highway;

    /**
     * @var integer
     *
     * @ORM\Column(name="otmkad", type="integer", nullable=true)
     */
    private $otmkad;

    /**
     * @var integer
     *
     * @ORM\Column(name="metro", type="integer", nullable=false)
     */
    private $metro;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=200, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="cadastral_number", type="string", length=200, nullable=true)
     */
    private $cadastralNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="fias_houses_id", type="integer", nullable=true)
     */
    private $fiasHousesId;

    /**
     * @var string
     *
     * @ORM\Column(name="yandex_address_str", type="string", length=200, nullable=true)
     */
    private $yandexAddressStr;

    /**
     * @var integer
     *
     * @ORM\Column(name="u_area", type="integer", nullable=true)
     */
    private $uArea;

    /**
     * @var integer
     *
     * @ORM\Column(name="t_area", type="integer", nullable=true)
     */
    private $tArea;

    /**
     * @var integer
     *
     * @ORM\Column(name="area_max", type="integer", nullable=true)
     */
    private $areaMax;

    /**
     * @var integer
     *
     * @ORM\Column(name="area_max_sale", type="integer", nullable=true)
     */
    private $areaMaxSale;

    /**
     * @var integer
     *
     * @ORM\Column(name="area_max_safe", type="integer", nullable=true)
     */
    private $areaMaxSafe;

    /**
     * @var integer
     *
     * @ORM\Column(name="area_max_subrent", type="integer", nullable=true)
     */
    private $areaMaxSubrent;

    /**
     * @var integer
     *
     * @ORM\Column(name="o_area", type="integer", nullable=true)
     */
    private $oArea;

    /**
     * @var integer
     *
     * @ORM\Column(name="area_min", type="integer", nullable=true)
     */
    private $areaMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="area_min_sale", type="integer", nullable=true)
     */
    private $areaMinSale;

    /**
     * @var integer
     *
     * @ORM\Column(name="area_min_safe", type="integer", nullable=true)
     */
    private $areaMinSafe;

    /**
     * @var integer
     *
     * @ORM\Column(name="area_min_subrent", type="integer", nullable=true)
     */
    private $areaMinSubrent;

    /**
     * @var integer
     *
     * @ORM\Column(name="floors", type="integer", nullable=true)
     */
    private $floors;

    /**
     * @var integer
     *
     * @ORM\Column(name="prepay", type="integer", nullable=true)
     */
    private $prepay;

    /**
     * @var integer
     *
     * @ORM\Column(name="facing_type", type="integer", nullable=false)
     */
    private $facingType;

    /**
     * @var string
     *
     * @ORM\Column(name="p_elevators", type="string", length=200, nullable=true)
     */
    private $pElevators;

    /**
     * @var string
     *
     * @ORM\Column(name="gantry_cranes", type="string", length=200, nullable=true)
     */
    private $gantryCranes;

    /**
     * @var string
     *
     * @ORM\Column(name="railway_cranes", type="string", length=200, nullable=true)
     */
    private $railwayCranes;

    /**
     * @var boolean
     *
     * @ORM\Column(name="railway", type="boolean", nullable=false)
     */
    private $railway;

    /**
     * @var integer
     *
     * @ORM\Column(name="railway_length", type="integer", nullable=true)
     */
    private $railwayLength;

    /**
     * @var boolean
     *
     * @ORM\Column(name="nooffice", type="boolean", nullable=false)
     */
    private $nooffice;

    /**
     * @var boolean
     *
     * @ORM\Column(name="telephony", type="boolean", nullable=false)
     */
    private $telephony;

    /**
     * @var integer
     *
     * @ORM\Column(name="year_build", type="integer", nullable=true)
     */
    private $yearBuild;

    /**
     * @var integer
     *
     * @ORM\Column(name="year_reconst", type="integer", nullable=true)
     */
    private $yearReconst;

    /**
     * @var integer
     *
     * @ORM\Column(name="guard", type="integer", nullable=false)
     */
    private $guard;

    /**
     * @var string
     *
     * @ORM\Column(name="entry_territory", type="string", length=100, nullable=true)
     */
    private $entryTerritory;

    /**
     * @var string
     *
     * @ORM\Column(name="parking_car_type", type="string", length=100, nullable=true)
     */
    private $parkingCarType;

    /**
     * @var string
     *
     * @ORM\Column(name="parking_truck_type", type="string", length=100, nullable=true)
     */
    private $parkingTruckType;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="description_handmade", type="text", length=65535, nullable=true)
     */
    private $descriptionHandmade;

    /**
     * @var string
     *
     * @ORM\Column(name="description_sale", type="text", length=65535, nullable=true)
     */
    private $descriptionSale;

    /**
     * @var string
     *
     * @ORM\Column(name="description_sale_handmade", type="text", length=65535, nullable=true)
     */
    private $descriptionSaleHandmade;

    /**
     * @var string
     *
     * @ORM\Column(name="description_safe_handmade", type="text", length=65535, nullable=true)
     */
    private $descriptionSafeHandmade;

    /**
     * @var string
     *
     * @ORM\Column(name="description_safe", type="text", length=65535, nullable=true)
     */
    private $descriptionSafe;

    /**
     * @var string
     *
     * @ORM\Column(name="description_subrent", type="text", length=65535, nullable=true)
     */
    private $descriptionSubrent;

    /**
     * @var string
     *
     * @ORM\Column(name="description_subrent_handmade", type="text", length=65535, nullable=true)
     */
    private $descriptionSubrentHandmade;

    /**
     * @var string
     *
     * @ORM\Column(name="path2fs", type="text", length=65535, nullable=true)
     */
    private $path2fs;

    /**
     * @var string
     *
     * @ORM\Column(name="infrastructure", type="string", length=100, nullable=true)
     */
    private $infrastructure;

    /**
     * @var boolean
     *
     * @ORM\Column(name="gas", type="boolean", nullable=false)
     */
    private $gas;

    /**
     * @var boolean
     *
     * @ORM\Column(name="description_handmade_use", type="boolean", nullable=false)
     */
    private $descriptionHandmadeUse;

    /**
     * @var boolean
     *
     * @ORM\Column(name="description_sale_handmade_use", type="boolean", nullable=false)
     */
    private $descriptionSaleHandmadeUse;

    /**
     * @var boolean
     *
     * @ORM\Column(name="description_safe_handmade_use", type="boolean", nullable=false)
     */
    private $descriptionSafeHandmadeUse;

    /**
     * @var boolean
     *
     * @ORM\Column(name="description_subrent_handmade_use", type="boolean", nullable=false)
     */
    private $descriptionSubrentHandmadeUse;

    /**
     * @var boolean
     *
     * @ORM\Column(name="parking_car", type="boolean", nullable=false)
     */
    private $parkingCar;

    /**
     * @var boolean
     *
     * @ORM\Column(name="parking_truck", type="boolean", nullable=false)
     */
    private $parkingTruck;

    /**
     * @var boolean
     *
     * @ORM\Column(name="vape", type="boolean", nullable=false)
     */
    private $vape;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deposit", type="boolean", nullable=false)
     */
    private $deposit;

    /**
     * @var boolean
     *
     * @ORM\Column(name="agent_visited", type="boolean", nullable=false)
     */
    private $agentVisited;

    /**
     * @var boolean
     *
     * @ORM\Column(name="agent_visited_sale", type="boolean", nullable=false)
     */
    private $agentVisitedSale;

    /**
     * @var boolean
     *
     * @ORM\Column(name="agent_visited_safe", type="boolean", nullable=false)
     */
    private $agentVisitedSafe;

    /**
     * @var boolean
     *
     * @ORM\Column(name="agent_visited_subrent", type="boolean", nullable=false)
     */
    private $agentVisitedSubrent;

    /**
     * @var string
     *
     * @ORM\Column(name="power", type="decimal", precision=10, scale=1, nullable=true)
     */
    private $power;

    /**
     * @var string
     *
     * @ORM\Column(name="power_all", type="decimal", precision=10, scale=1, nullable=true)
     */
    private $powerAll;

    /**
     * @var integer
     *
     * @ORM\Column(name="gas_how", type="integer", nullable=true)
     */
    private $gasHow;

    /**
     * @var integer
     *
     * @ORM\Column(name="vape_how", type="integer", nullable=true)
     */
    private $vapeHow;

    /**
     * @var integer
     *
     * @ORM\Column(name="water", type="integer", nullable=false)
     */
    private $water;

    /**
     * @var integer
     *
     * @ORM\Column(name="sewage", type="integer", nullable=false)
     */
    private $sewage;

    /**
     * @var integer
     *
     * @ORM\Column(name="heating", type="integer", nullable=false)
     */
    private $heating;

    /**
     * @var integer
     *
     * @ORM\Column(name="ventilation", type="integer", nullable=false)
     */
    private $ventilation;

    /**
     * @var integer
     *
     * @ORM\Column(name="internet", type="integer", nullable=false)
     */
    private $internet;

    /**
     * @var string
     *
     * @ORM\Column(name="safety_systems", type="string", length=100, nullable=true)
     */
    private $safetySystems;

    /**
     * @var string
     *
     * @ORM\Column(name="deal_type", type="string", length=100, nullable=true)
     */
    private $dealType;

    /**
     * @var integer
     *
     * @ORM\Column(name="sale_price", type="bigint", nullable=false)
     */
    private $salePrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="sale_price_metr", type="integer", nullable=false)
     */
    private $salePriceMetr;

    /**
     * @var integer
     *
     * @ORM\Column(name="rent_price", type="integer", nullable=false)
     */
    private $rentPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="subrent_price", type="integer", nullable=false)
     */
    private $subrentPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="rent_price_safe", type="integer", nullable=false)
     */
    private $rentPriceSafe;

    /**
     * @var integer
     *
     * @ORM\Column(name="office_price", type="integer", nullable=false)
     */
    private $officePrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="office_price_subrent", type="integer", nullable=false)
     */
    private $officePriceSubrent;

    /**
     * @var integer
     *
     * @ORM\Column(name="mezz_price", type="integer", nullable=false)
     */
    private $mezzPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="mezz_price_subrent", type="integer", nullable=false)
     */
    private $mezzPriceSubrent;

    /**
     * @var string
     *
     * @ORM\Column(name="rent_inc", type="string", length=100, nullable=true)
     */
    private $rentInc;

    /**
     * @var string
     *
     * @ORM\Column(name="rent_inc_safe", type="string", length=100, nullable=true)
     */
    private $rentIncSafe;

    /**
     * @var string
     *
     * @ORM\Column(name="rent_inc_office", type="string", length=100, nullable=true)
     */
    private $rentIncOffice;

    /**
     * @var string
     *
     * @ORM\Column(name="incs_currency", type="string", length=100, nullable=true)
     */
    private $incsCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="incs_currency_safe", type="string", length=100, nullable=true)
     */
    private $incsCurrencySafe;

    /**
     * @var string
     *
     * @ORM\Column(name="incs_currency_all", type="string", length=100, nullable=true)
     */
    private $incsCurrencyAll;

    /**
     * @var string
     *
     * @ORM\Column(name="incs_currency_all_metr", type="string", length=100, nullable=true)
     */
    private $incsCurrencyAllMetr;

    /**
     * @var string
     *
     * @ORM\Column(name="incs_currency_office", type="string", length=100, nullable=true)
     */
    private $incsCurrencyOffice;

    /**
     * @var integer
     *
     * @ORM\Column(name="result", type="integer", nullable=false)
     */
    private $result;

    /**
     * @var integer
     *
     * @ORM\Column(name="result_who", type="integer", nullable=false)
     */
    private $resultWho;

    /**
     * @var float
     *
     * @ORM\Column(name="c_x", type="float", precision=15, scale=12, nullable=false)
     */
    private $cX;

    /**
     * @var float
     *
     * @ORM\Column(name="c_x_backup", type="float", precision=15, scale=12, nullable=false)
     */
    private $cXBackup;

    /**
     * @var float
     *
     * @ORM\Column(name="c_y", type="float", precision=15, scale=12, nullable=false)
     */
    private $cY;

    /**
     * @var float
     *
     * @ORM\Column(name="c_y_backup", type="float", precision=15, scale=12, nullable=false)
     */
    private $cYBackup;

    /**
     * @var string
     *
     * @ORM\Column(name="c_map", type="text", length=65535, nullable=true)
     */
    private $cMap;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_update", type="date", nullable=true)
     */
    private $dtUpdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_update_full", type="datetime", nullable=true)
     */
    private $dtUpdateFull;

    /**
     * @var integer
     *
     * @ORM\Column(name="agent", type="integer", nullable=false)
     */
    private $agent;

    /**
     * @var integer
     *
     * @ORM\Column(name="agent_sale", type="integer", nullable=false)
     */
    private $agentSale;

    /**
     * @var integer
     *
     * @ORM\Column(name="agent_safe", type="integer", nullable=false)
     */
    private $agentSafe;

    /**
     * @var integer
     *
     * @ORM\Column(name="agent_subrent", type="integer", nullable=false)
     */
    private $agentSubrent;

    /**
     * @var integer
     *
     * @ORM\Column(name="old_agent", type="integer", nullable=true)
     */
    private $oldAgent;

    /**
     * @var boolean
     *
     * @ORM\Column(name="onsite", type="boolean", nullable=false)
     */
    private $onsite;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dogovor", type="boolean", nullable=false)
     */
    private $dogovor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="onsite_top", type="boolean", nullable=false)
     */
    private $onsiteTop;

    /**
     * @var boolean
     *
     * @ORM\Column(name="electricity_included", type="boolean", nullable=false)
     */
    private $electricityIncluded;

    /**
     * @var boolean
     *
     * @ORM\Column(name="onsite_noprice_sale", type="boolean", nullable=false)
     */
    private $onsiteNopriceSale;

    /**
     * @var boolean
     *
     * @ORM\Column(name="onsite_noprice_rent", type="boolean", nullable=false)
     */
    private $onsiteNopriceRent;

    /**
     * @var boolean
     *
     * @ORM\Column(name="onsite_noprice_subrent", type="boolean", nullable=false)
     */
    private $onsiteNopriceSubrent;

    /**
     * @var boolean
     *
     * @ORM\Column(name="onsite_noprice_safe", type="boolean", nullable=false)
     */
    private $onsiteNopriceSafe;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted;

    /**
     * @var string
     *
     * @ORM\Column(name="slcomments", type="text", length=65535, nullable=true)
     */
    private $slcomments;

    /**
     * @var integer
     *
     * @ORM\Column(name="openstage", type="integer", nullable=true)
     */
    private $openstage;

    /**
     * @var string
     *
     * @ORM\Column(name="owner_pays_howmuch", type="decimal", precision=10, scale=1, nullable=true)
     */
    private $ownerPaysHowmuch;

    /**
     * @var string
     *
     * @ORM\Column(name="owner_pays_howmuch_sale", type="decimal", precision=10, scale=1, nullable=true)
     */
    private $ownerPaysHowmuchSale;

    /**
     * @var boolean
     *
     * @ORM\Column(name="owner_pays_howmuch_not", type="boolean", nullable=true)
     */
    private $ownerPaysHowmuchNot;

    /**
     * @var boolean
     *
     * @ORM\Column(name="owner_pays_howmuch_not_sale", type="boolean", nullable=true)
     */
    private $ownerPaysHowmuchNotSale;

    /**
     * @var boolean
     *
     * @ORM\Column(name="owner_pays_howmuch_rentholidays", type="boolean", nullable=true)
     */
    private $ownerPaysHowmuchRentholidays;

    /**
     * @var string
     *
     * @ORM\Column(name="owner_pays_howmuch_4client", type="decimal", precision=10, scale=1, nullable=true)
     */
    private $ownerPaysHowmuch4client;

    /**
     * @var string
     *
     * @ORM\Column(name="owner_pays_howmuch_4client_sale", type="decimal", precision=10, scale=1, nullable=true)
     */
    private $ownerPaysHowmuch4clientSale;

    /**
     * @var boolean
     *
     * @ORM\Column(name="owner_pays_howmuch_4client_not", type="boolean", nullable=true)
     */
    private $ownerPaysHowmuch4clientNot;

    /**
     * @var boolean
     *
     * @ORM\Column(name="owner_pays_howmuch_4client_not_sale", type="boolean", nullable=true)
     */
    private $ownerPaysHowmuch4clientNotSale;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_dogovor", type="date", nullable=true)
     */
    private $dtDogovor;

    /**
     * @var string
     *
     * @ORM\Column(name="suitable_4food_production", type="text", length=65535, nullable=true)
     */
    private $suitable4foodProduction;

    /**
     * @var string
     *
     * @ORM\Column(name="suitable_4food_production_sale", type="text", length=65535, nullable=true)
     */
    private $suitable4foodProductionSale;

    /**
     * @var string
     *
     * @ORM\Column(name="suitable_4food_production_handmade", type="text", length=65535, nullable=true)
     */
    private $suitable4foodProductionHandmade;

    /**
     * @var string
     *
     * @ORM\Column(name="suitable_4food_production_sale_handmade", type="text", length=65535, nullable=true)
     */
    private $suitable4foodProductionSaleHandmade;

    /**
     * @var string
     *
     * @ORM\Column(name="suitable_4garment_manufacturing", type="text", length=65535, nullable=true)
     */
    private $suitable4garmentManufacturing;

    /**
     * @var string
     *
     * @ORM\Column(name="suitable_4garment_manufacturing_sale", type="text", length=65535, nullable=true)
     */
    private $suitable4garmentManufacturingSale;

    /**
     * @var string
     *
     * @ORM\Column(name="suitable_4garment_manufacturing_handmade", type="text", length=65535, nullable=true)
     */
    private $suitable4garmentManufacturingHandmade;

    /**
     * @var string
     *
     * @ORM\Column(name="suitable_4garment_manufacturing_sale_handmade", type="text", length=65535, nullable=true)
     */
    private $suitable4garmentManufacturingSaleHandmade;

    /**
     * @var string
     *
     * @ORM\Column(name="suitable_4autoservice", type="text", length=65535, nullable=true)
     */
    private $suitable4autoservice;

    /**
     * @var string
     *
     * @ORM\Column(name="suitable_4autoservice_sale", type="text", length=65535, nullable=true)
     */
    private $suitable4autoserviceSale;

    /**
     * @var string
     *
     * @ORM\Column(name="suitable_4autoservice_handmade", type="text", length=65535, nullable=true)
     */
    private $suitable4autoserviceHandmade;

    /**
     * @var string
     *
     * @ORM\Column(name="suitable_4autoservice_sale_handmade", type="text", length=65535, nullable=true)
     */
    private $suitable4autoserviceSaleHandmade;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bargain_rent", type="boolean", nullable=true)
     */
    private $bargainRent;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bargain_sale", type="boolean", nullable=true)
     */
    private $bargainSale;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bargain_office", type="boolean", nullable=true)
     */
    private $bargainOffice;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bargain_safe", type="boolean", nullable=true)
     */
    private $bargainSafe;

    /**
     * @var boolean
     *
     * @ORM\Column(name="import_sale_cian", type="boolean", nullable=false)
     */
    private $importSaleCian;

    /**
     * @var boolean
     *
     * @ORM\Column(name="import_sale_irr", type="boolean", nullable=false)
     */
    private $importSaleIrr;

    /**
     * @var boolean
     *
     * @ORM\Column(name="import_sale_irr_vip", type="boolean", nullable=false)
     */
    private $importSaleIrrVip;

    /**
     * @var boolean
     *
     * @ORM\Column(name="import_sale_irr_premium", type="boolean", nullable=false)
     */
    private $importSaleIrrPremium;

    /**
     * @var boolean
     *
     * @ORM\Column(name="import_sale_irr_markup", type="boolean", nullable=false)
     */
    private $importSaleIrrMarkup;

    /**
     * @var boolean
     *
     * @ORM\Column(name="import_sale_irr_pushup", type="boolean", nullable=false)
     */
    private $importSaleIrrPushup;

    /**
     * @var boolean
     *
     * @ORM\Column(name="import_sale_free", type="boolean", nullable=false)
     */
    private $importSaleFree;

    /**
     * @var boolean
     *
     * @ORM\Column(name="import_sale_yandex", type="boolean", nullable=false)
     */
    private $importSaleYandex;

    /**
     * @var boolean
     *
     * @ORM\Column(name="import_rent_cian", type="boolean", nullable=false)
     */
    private $importRentCian;

    /**
     * @var boolean
     *
     * @ORM\Column(name="import_rent_irr", type="boolean", nullable=false)
     */
    private $importRentIrr;

    /**
     * @var boolean
     *
     * @ORM\Column(name="import_rent_irr_vip", type="boolean", nullable=false)
     */
    private $importRentIrrVip;

    /**
     * @var boolean
     *
     * @ORM\Column(name="import_rent_irr_premium", type="boolean", nullable=false)
     */
    private $importRentIrrPremium;

    /**
     * @var boolean
     *
     * @ORM\Column(name="import_rent_irr_markup", type="boolean", nullable=false)
     */
    private $importRentIrrMarkup;

    /**
     * @var boolean
     *
     * @ORM\Column(name="import_rent_irr_pushup", type="boolean", nullable=false)
     */
    private $importRentIrrPushup;

    /**
     * @var boolean
     *
     * @ORM\Column(name="import_rent_free", type="boolean", nullable=false)
     */
    private $importRentFree;

    /**
     * @var boolean
     *
     * @ORM\Column(name="import_rent_yandex", type="boolean", nullable=false)
     */
    private $importRentYandex;

    /**
     * @var boolean
     *
     * @ORM\Column(name="import_sale_cian_premium", type="boolean", nullable=false)
     */
    private $importSaleCianPremium;

    /**
     * @var boolean
     *
     * @ORM\Column(name="import_rent_cian_premium", type="boolean", nullable=false)
     */
    private $importRentCianPremium;

    /**
     * @var boolean
     *
     * @ORM\Column(name="import_sale_cian_top3", type="boolean", nullable=false)
     */
    private $importSaleCianTop3;

    /**
     * @var boolean
     *
     * @ORM\Column(name="import_rent_cian_top3", type="boolean", nullable=false)
     */
    private $importRentCianTop3;

    /**
     * @var boolean
     *
     * @ORM\Column(name="import_sale_cian_hl", type="boolean", nullable=false)
     */
    private $importSaleCianHl;

    /**
     * @var boolean
     *
     * @ORM\Column(name="import_rent_cian_hl", type="boolean", nullable=false)
     */
    private $importRentCianHl;

    /**
     * @var integer
     *
     * @ORM\Column(name="currency", type="integer", nullable=false)
     */
    private $currency;

    /**
     * @var integer
     *
     * @ORM\Column(name="currency_safe", type="integer", nullable=false)
     */
    private $currencySafe;

    /**
     * @var integer
     *
     * @ORM\Column(name="currency_all", type="integer", nullable=false)
     */
    private $currencyAll;

    /**
     * @var integer
     *
     * @ORM\Column(name="currency_all_metr", type="integer", nullable=false)
     */
    private $currencyAllMetr;

    /**
     * @var integer
     *
     * @ORM\Column(name="currency_office", type="integer", nullable=false)
     */
    private $currencyOffice;

    /**
     * @var integer
     *
     * @ORM\Column(name="from_metro", type="integer", nullable=true)
     */
    private $fromMetro;

    /**
     * @var integer
     *
     * @ORM\Column(name="from_metro_by", type="integer", nullable=false)
     */
    private $fromMetroBy;

    /**
     * @var integer
     *
     * @ORM\Column(name="railway_station", type="integer", nullable=false)
     */
    private $railwayStation;

    /**
     * @var integer
     *
     * @ORM\Column(name="entrance_type", type="integer", nullable=false)
     */
    private $entranceType;

    /**
     * @var integer
     *
     * @ORM\Column(name="plain_type", type="integer", nullable=false)
     */
    private $plainType;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_rent_ceiling_height", type="string", length=255, nullable=false)
     */
    private $calcRentCeilingHeight;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_rent_ceiling_height2", type="string", length=255, nullable=false)
     */
    private $calcRentCeilingHeight2;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_sale_ceiling_height", type="string", length=255, nullable=false)
     */
    private $calcSaleCeilingHeight;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_sale_ceiling_height2", type="string", length=255, nullable=false)
     */
    private $calcSaleCeilingHeight2;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_rent_gate_type", type="string", length=255, nullable=false)
     */
    private $calcRentGateType;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_sale_gate_type", type="string", length=255, nullable=false)
     */
    private $calcSaleGateType;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_rent_gates_number", type="string", length=255, nullable=false)
     */
    private $calcRentGatesNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_sale_gates_number", type="string", length=255, nullable=false)
     */
    private $calcSaleGatesNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_rent_floor_type", type="string", length=255, nullable=false)
     */
    private $calcRentFloorType;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_sale_floor_type", type="string", length=255, nullable=false)
     */
    private $calcSaleFloorType;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_rent_floor_load", type="string", length=255, nullable=false)
     */
    private $calcRentFloorLoad;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_sale_floor_load", type="string", length=255, nullable=false)
     */
    private $calcSaleFloorLoad;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_rent_collon_mesh", type="string", length=255, nullable=false)
     */
    private $calcRentCollonMesh;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_sale_collon_mesh", type="string", length=255, nullable=false)
     */
    private $calcSaleCollonMesh;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_rent_heated", type="string", length=255, nullable=false)
     */
    private $calcRentHeated;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_sale_heated", type="string", length=255, nullable=false)
     */
    private $calcSaleHeated;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_rent_telphers", type="string", length=255, nullable=false)
     */
    private $calcRentTelphers;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_sale_telphers", type="string", length=255, nullable=false)
     */
    private $calcSaleTelphers;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_rent_catheads", type="string", length=255, nullable=false)
     */
    private $calcRentCatheads;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_sale_catheads", type="string", length=255, nullable=false)
     */
    private $calcSaleCatheads;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_rent_overhead_cranes", type="string", length=255, nullable=false)
     */
    private $calcRentOverheadCranes;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_sale_overhead_cranes", type="string", length=255, nullable=false)
     */
    private $calcSaleOverheadCranes;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_rent_s_elevators", type="string", length=255, nullable=false)
     */
    private $calcRentSElevators;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_sale_s_elevators", type="string", length=255, nullable=false)
     */
    private $calcSaleSElevators;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_rent_area_mezz", type="string", length=255, nullable=false)
     */
    private $calcRentAreaMezz;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_rent_area_office", type="string", length=255, nullable=false)
     */
    private $calcRentAreaOffice;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_sale_area_mezz", type="string", length=255, nullable=false)
     */
    private $calcSaleAreaMezz;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_sale_area_office", type="string", length=255, nullable=false)
     */
    private $calcSaleAreaOffice;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_subrent_ceiling_height", type="string", length=255, nullable=false)
     */
    private $calcSubrentCeilingHeight;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_subrent_ceiling_height2", type="string", length=255, nullable=false)
     */
    private $calcSubrentCeilingHeight2;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_subrent_gate_type", type="string", length=255, nullable=false)
     */
    private $calcSubrentGateType;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_subrent_gates_number", type="string", length=255, nullable=false)
     */
    private $calcSubrentGatesNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_subrent_floor_type", type="string", length=255, nullable=false)
     */
    private $calcSubrentFloorType;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_subrent_floor_load", type="string", length=255, nullable=false)
     */
    private $calcSubrentFloorLoad;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_subrent_collon_mesh", type="string", length=255, nullable=false)
     */
    private $calcSubrentCollonMesh;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_subrent_heated", type="string", length=255, nullable=false)
     */
    private $calcSubrentHeated;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_subrent_telphers", type="string", length=255, nullable=false)
     */
    private $calcSubrentTelphers;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_subrent_catheads", type="string", length=255, nullable=false)
     */
    private $calcSubrentCatheads;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_subrent_overhead_cranes", type="string", length=255, nullable=false)
     */
    private $calcSubrentOverheadCranes;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_subrent_s_elevators", type="string", length=255, nullable=false)
     */
    private $calcSubrentSElevators;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_subrent_area_mezz", type="string", length=255, nullable=false)
     */
    private $calcSubrentAreaMezz;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_subrent_area_office", type="string", length=255, nullable=false)
     */
    private $calcSubrentAreaOffice;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_safe_ceiling_height", type="string", length=255, nullable=false)
     */
    private $calcSafeCeilingHeight;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_safe_ceiling_height2", type="string", length=255, nullable=false)
     */
    private $calcSafeCeilingHeight2;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_safe_gate_type", type="string", length=255, nullable=false)
     */
    private $calcSafeGateType;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_safe_gates_number", type="string", length=255, nullable=false)
     */
    private $calcSafeGatesNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_safe_floor_type", type="string", length=255, nullable=false)
     */
    private $calcSafeFloorType;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_safe_floor_load", type="string", length=255, nullable=false)
     */
    private $calcSafeFloorLoad;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_safe_collon_mesh", type="string", length=255, nullable=false)
     */
    private $calcSafeCollonMesh;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_safe_heated", type="string", length=255, nullable=false)
     */
    private $calcSafeHeated;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_safe_telphers", type="string", length=255, nullable=false)
     */
    private $calcSafeTelphers;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_safe_catheads", type="string", length=255, nullable=false)
     */
    private $calcSafeCatheads;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_safe_overhead_cranes", type="string", length=255, nullable=false)
     */
    private $calcSafeOverheadCranes;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_safe_s_elevators", type="string", length=255, nullable=false)
     */
    private $calcSafeSElevators;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_safe_area_mezz", type="string", length=255, nullable=false)
     */
    private $calcSafeAreaMezz;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_safe_area_office", type="string", length=255, nullable=false)
     */
    private $calcSafeAreaOffice;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_sale_warehouse_equipment", type="string", length=255, nullable=false)
     */
    private $calcSaleWarehouseEquipment;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_safe_warehouse_equipment", type="string", length=255, nullable=false)
     */
    private $calcSafeWarehouseEquipment;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_rent_warehouse_equipment", type="string", length=255, nullable=false)
     */
    private $calcRentWarehouseEquipment;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_subrent_warehouse_equipment", type="string", length=255, nullable=false)
     */
    private $calcSubrentWarehouseEquipment;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_sale_payinc", type="string", length=255, nullable=false)
     */
    private $calcSalePayinc;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_safe_payinc", type="string", length=255, nullable=false)
     */
    private $calcSafePayinc;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_rent_payinc", type="string", length=255, nullable=false)
     */
    private $calcRentPayinc;

    /**
     * @var string
     *
     * @ORM\Column(name="_calc_subrent_payinc", type="string", length=255, nullable=false)
     */
    private $calcSubrentPayinc;

    /**
     * @var integer
     *
     * @ORM\Column(name="safe_price_rack", type="integer", nullable=false)
     */
    private $safePriceRack;

    /**
     * @var integer
     *
     * @ORM\Column(name="safe_price_rack_oversized", type="integer", nullable=false)
     */
    private $safePriceRackOversized;

    /**
     * @var integer
     *
     * @ORM\Column(name="safe_price_cell", type="integer", nullable=false)
     */
    private $safePriceCell;

    /**
     * @var integer
     *
     * @ORM\Column(name="safe_price_floor", type="integer", nullable=false)
     */
    private $safePriceFloor;

    /**
     * @var integer
     *
     * @ORM\Column(name="safe_price_floor_oversized", type="integer", nullable=false)
     */
    private $safePriceFloorOversized;

    /**
     * @var integer
     *
     * @ORM\Column(name="_calc_rent_count_active_blocks", type="integer", nullable=false)
     */
    private $calcRentCountActiveBlocks;

    /**
     * @var integer
     *
     * @ORM\Column(name="_calc_sale_count_active_blocks", type="integer", nullable=false)
     */
    private $calcSaleCountActiveBlocks;

    /**
     * @var integer
     *
     * @ORM\Column(name="_calc_safe_count_active_blocks", type="integer", nullable=false)
     */
    private $calcSafeCountActiveBlocks;

    /**
     * @var integer
     *
     * @ORM\Column(name="_calc_subrent_count_active_blocks", type="integer", nullable=false)
     */
    private $calcSubrentCountActiveBlocks;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dtInsert
     *
     * @param \DateTime $dtInsert
     * @return CIndustry
     */
    public function setDtInsert($dtInsert)
    {
        $this->dtInsert = $dtInsert;

        return $this;
    }

    /**
     * Get dtInsert
     *
     * @return \DateTime 
     */
    public function getDtInsert()
    {
        return $this->dtInsert;
    }

    /**
     * Set dtExport
     *
     * @param \DateTime $dtExport
     * @return CIndustry
     */
    public function setDtExport($dtExport)
    {
        $this->dtExport = $dtExport;

        return $this;
    }

    /**
     * Get dtExport
     *
     * @return \DateTime 
     */
    public function getDtExport()
    {
        return $this->dtExport;
    }

    /**
     * Set clyentId
     *
     * @param integer $clyentId
     * @return CIndustry
     */
    public function setClyentId($clyentId)
    {
        $this->clyentId = $clyentId;

        return $this;
    }

    /**
     * Get clyentId
     *
     * @return integer 
     */
    public function getClyentId()
    {
        return $this->clyentId;
    }

    /**
     * Set objectType2
     *
     * @param string $objectType2
     * @return CIndustry
     */
    public function setObjectType2($objectType2)
    {
        $this->objectType2 = $objectType2;

        return $this;
    }

    /**
     * Get objectType2
     *
     * @return string 
     */
    public function getObjectType2()
    {
        return $this->objectType2;
    }

    /**
     * Set purposeWarehouse
     *
     * @param string $purposeWarehouse
     * @return CIndustry
     */
    public function setPurposeWarehouse($purposeWarehouse)
    {
        $this->purposeWarehouse = $purposeWarehouse;

        return $this;
    }

    /**
     * Get purposeWarehouse
     *
     * @return string 
     */
    public function getPurposeWarehouse()
    {
        return $this->purposeWarehouse;
    }

    /**
     * Set firefighting
     *
     * @param integer $firefighting
     * @return CIndustry
     */
    public function setFirefighting($firefighting)
    {
        $this->firefighting = $firefighting;

        return $this;
    }

    /**
     * Get firefighting
     *
     * @return integer 
     */
    public function getFirefighting()
    {
        return $this->firefighting;
    }

    /**
     * Set objectClass
     *
     * @param integer $objectClass
     * @return CIndustry
     */
    public function setObjectClass($objectClass)
    {
        $this->objectClass = $objectClass;

        return $this;
    }

    /**
     * Get objectClass
     *
     * @return integer 
     */
    public function getObjectClass()
    {
        return $this->objectClass;
    }

    /**
     * Set region
     *
     * @param integer $region
     * @return CIndustry
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return integer 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set district
     *
     * @param integer $district
     * @return CIndustry
     */
    public function setDistrict($district)
    {
        $this->district = $district;

        return $this;
    }

    /**
     * Get district
     *
     * @return integer 
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Set direction
     *
     * @param integer $direction
     * @return CIndustry
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;

        return $this;
    }

    /**
     * Get direction
     *
     * @return integer 
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * Set village
     *
     * @param integer $village
     * @return CIndustry
     */
    public function setVillage($village)
    {
        $this->village = $village;

        return $this;
    }

    /**
     * Get village
     *
     * @return integer 
     */
    public function getVillage()
    {
        return $this->village;
    }

    /**
     * Set highway
     *
     * @param integer $highway
     * @return CIndustry
     */
    public function setHighway($highway)
    {
        $this->highway = $highway;

        return $this;
    }

    /**
     * Get highway
     *
     * @return integer 
     */
    public function getHighway()
    {
        return $this->highway;
    }

    /**
     * Set otmkad
     *
     * @param integer $otmkad
     * @return CIndustry
     */
    public function setOtmkad($otmkad)
    {
        $this->otmkad = $otmkad;

        return $this;
    }

    /**
     * Get otmkad
     *
     * @return integer 
     */
    public function getOtmkad()
    {
        return $this->otmkad;
    }

    /**
     * Set metro
     *
     * @param integer $metro
     * @return CIndustry
     */
    public function setMetro($metro)
    {
        $this->metro = $metro;

        return $this;
    }

    /**
     * Get metro
     *
     * @return integer 
     */
    public function getMetro()
    {
        return $this->metro;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return CIndustry
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set cadastralNumber
     *
     * @param string $cadastralNumber
     * @return CIndustry
     */
    public function setCadastralNumber($cadastralNumber)
    {
        $this->cadastralNumber = $cadastralNumber;

        return $this;
    }

    /**
     * Get cadastralNumber
     *
     * @return string 
     */
    public function getCadastralNumber()
    {
        return $this->cadastralNumber;
    }

    /**
     * Set fiasHousesId
     *
     * @param integer $fiasHousesId
     * @return CIndustry
     */
    public function setFiasHousesId($fiasHousesId)
    {
        $this->fiasHousesId = $fiasHousesId;

        return $this;
    }

    /**
     * Get fiasHousesId
     *
     * @return integer 
     */
    public function getFiasHousesId()
    {
        return $this->fiasHousesId;
    }

    /**
     * Set yandexAddressStr
     *
     * @param string $yandexAddressStr
     * @return CIndustry
     */
    public function setYandexAddressStr($yandexAddressStr)
    {
        $this->yandexAddressStr = $yandexAddressStr;

        return $this;
    }

    /**
     * Get yandexAddressStr
     *
     * @return string 
     */
    public function getYandexAddressStr()
    {
        return $this->yandexAddressStr;
    }

    /**
     * Set uArea
     *
     * @param integer $uArea
     * @return CIndustry
     */
    public function setUArea($uArea)
    {
        $this->uArea = $uArea;

        return $this;
    }

    /**
     * Get uArea
     *
     * @return integer 
     */
    public function getUArea()
    {
        return $this->uArea;
    }

    /**
     * Set tArea
     *
     * @param integer $tArea
     * @return CIndustry
     */
    public function setTArea($tArea)
    {
        $this->tArea = $tArea;

        return $this;
    }

    /**
     * Get tArea
     *
     * @return integer 
     */
    public function getTArea()
    {
        return $this->tArea;
    }

    /**
     * Set areaMax
     *
     * @param integer $areaMax
     * @return CIndustry
     */
    public function setAreaMax($areaMax)
    {
        $this->areaMax = $areaMax;

        return $this;
    }

    /**
     * Get areaMax
     *
     * @return integer 
     */
    public function getAreaMax()
    {
        return $this->areaMax;
    }

    /**
     * Set areaMaxSale
     *
     * @param integer $areaMaxSale
     * @return CIndustry
     */
    public function setAreaMaxSale($areaMaxSale)
    {
        $this->areaMaxSale = $areaMaxSale;

        return $this;
    }

    /**
     * Get areaMaxSale
     *
     * @return integer 
     */
    public function getAreaMaxSale()
    {
        return $this->areaMaxSale;
    }

    /**
     * Set areaMaxSafe
     *
     * @param integer $areaMaxSafe
     * @return CIndustry
     */
    public function setAreaMaxSafe($areaMaxSafe)
    {
        $this->areaMaxSafe = $areaMaxSafe;

        return $this;
    }

    /**
     * Get areaMaxSafe
     *
     * @return integer 
     */
    public function getAreaMaxSafe()
    {
        return $this->areaMaxSafe;
    }

    /**
     * Set areaMaxSubrent
     *
     * @param integer $areaMaxSubrent
     * @return CIndustry
     */
    public function setAreaMaxSubrent($areaMaxSubrent)
    {
        $this->areaMaxSubrent = $areaMaxSubrent;

        return $this;
    }

    /**
     * Get areaMaxSubrent
     *
     * @return integer 
     */
    public function getAreaMaxSubrent()
    {
        return $this->areaMaxSubrent;
    }

    /**
     * Set oArea
     *
     * @param integer $oArea
     * @return CIndustry
     */
    public function setOArea($oArea)
    {
        $this->oArea = $oArea;

        return $this;
    }

    /**
     * Get oArea
     *
     * @return integer 
     */
    public function getOArea()
    {
        return $this->oArea;
    }

    /**
     * Set areaMin
     *
     * @param integer $areaMin
     * @return CIndustry
     */
    public function setAreaMin($areaMin)
    {
        $this->areaMin = $areaMin;

        return $this;
    }

    /**
     * Get areaMin
     *
     * @return integer 
     */
    public function getAreaMin()
    {
        return $this->areaMin;
    }

    /**
     * Set areaMinSale
     *
     * @param integer $areaMinSale
     * @return CIndustry
     */
    public function setAreaMinSale($areaMinSale)
    {
        $this->areaMinSale = $areaMinSale;

        return $this;
    }

    /**
     * Get areaMinSale
     *
     * @return integer 
     */
    public function getAreaMinSale()
    {
        return $this->areaMinSale;
    }

    /**
     * Set areaMinSafe
     *
     * @param integer $areaMinSafe
     * @return CIndustry
     */
    public function setAreaMinSafe($areaMinSafe)
    {
        $this->areaMinSafe = $areaMinSafe;

        return $this;
    }

    /**
     * Get areaMinSafe
     *
     * @return integer 
     */
    public function getAreaMinSafe()
    {
        return $this->areaMinSafe;
    }

    /**
     * Set areaMinSubrent
     *
     * @param integer $areaMinSubrent
     * @return CIndustry
     */
    public function setAreaMinSubrent($areaMinSubrent)
    {
        $this->areaMinSubrent = $areaMinSubrent;

        return $this;
    }

    /**
     * Get areaMinSubrent
     *
     * @return integer 
     */
    public function getAreaMinSubrent()
    {
        return $this->areaMinSubrent;
    }

    /**
     * Set floors
     *
     * @param integer $floors
     * @return CIndustry
     */
    public function setFloors($floors)
    {
        $this->floors = $floors;

        return $this;
    }

    /**
     * Get floors
     *
     * @return integer 
     */
    public function getFloors()
    {
        return $this->floors;
    }

    /**
     * Set prepay
     *
     * @param integer $prepay
     * @return CIndustry
     */
    public function setPrepay($prepay)
    {
        $this->prepay = $prepay;

        return $this;
    }

    /**
     * Get prepay
     *
     * @return integer 
     */
    public function getPrepay()
    {
        return $this->prepay;
    }

    /**
     * Set facingType
     *
     * @param integer $facingType
     * @return CIndustry
     */
    public function setFacingType($facingType)
    {
        $this->facingType = $facingType;

        return $this;
    }

    /**
     * Get facingType
     *
     * @return integer 
     */
    public function getFacingType()
    {
        return $this->facingType;
    }

    /**
     * Set pElevators
     *
     * @param string $pElevators
     * @return CIndustry
     */
    public function setPElevators($pElevators)
    {
        $this->pElevators = $pElevators;

        return $this;
    }

    /**
     * Get pElevators
     *
     * @return string 
     */
    public function getPElevators()
    {
        return $this->pElevators;
    }

    /**
     * Set gantryCranes
     *
     * @param string $gantryCranes
     * @return CIndustry
     */
    public function setGantryCranes($gantryCranes)
    {
        $this->gantryCranes = $gantryCranes;

        return $this;
    }

    /**
     * Get gantryCranes
     *
     * @return string 
     */
    public function getGantryCranes()
    {
        return $this->gantryCranes;
    }

    /**
     * Set railwayCranes
     *
     * @param string $railwayCranes
     * @return CIndustry
     */
    public function setRailwayCranes($railwayCranes)
    {
        $this->railwayCranes = $railwayCranes;

        return $this;
    }

    /**
     * Get railwayCranes
     *
     * @return string 
     */
    public function getRailwayCranes()
    {
        return $this->railwayCranes;
    }

    /**
     * Set railway
     *
     * @param boolean $railway
     * @return CIndustry
     */
    public function setRailway($railway)
    {
        $this->railway = $railway;

        return $this;
    }

    /**
     * Get railway
     *
     * @return boolean 
     */
    public function getRailway()
    {
        return $this->railway;
    }

    /**
     * Set railwayLength
     *
     * @param integer $railwayLength
     * @return CIndustry
     */
    public function setRailwayLength($railwayLength)
    {
        $this->railwayLength = $railwayLength;

        return $this;
    }

    /**
     * Get railwayLength
     *
     * @return integer 
     */
    public function getRailwayLength()
    {
        return $this->railwayLength;
    }

    /**
     * Set nooffice
     *
     * @param boolean $nooffice
     * @return CIndustry
     */
    public function setNooffice($nooffice)
    {
        $this->nooffice = $nooffice;

        return $this;
    }

    /**
     * Get nooffice
     *
     * @return boolean 
     */
    public function getNooffice()
    {
        return $this->nooffice;
    }

    /**
     * Set telephony
     *
     * @param boolean $telephony
     * @return CIndustry
     */
    public function setTelephony($telephony)
    {
        $this->telephony = $telephony;

        return $this;
    }

    /**
     * Get telephony
     *
     * @return boolean 
     */
    public function getTelephony()
    {
        return $this->telephony;
    }

    /**
     * Set yearBuild
     *
     * @param integer $yearBuild
     * @return CIndustry
     */
    public function setYearBuild($yearBuild)
    {
        $this->yearBuild = $yearBuild;

        return $this;
    }

    /**
     * Get yearBuild
     *
     * @return integer 
     */
    public function getYearBuild()
    {
        return $this->yearBuild;
    }

    /**
     * Set yearReconst
     *
     * @param integer $yearReconst
     * @return CIndustry
     */
    public function setYearReconst($yearReconst)
    {
        $this->yearReconst = $yearReconst;

        return $this;
    }

    /**
     * Get yearReconst
     *
     * @return integer 
     */
    public function getYearReconst()
    {
        return $this->yearReconst;
    }

    /**
     * Set guard
     *
     * @param integer $guard
     * @return CIndustry
     */
    public function setGuard($guard)
    {
        $this->guard = $guard;

        return $this;
    }

    /**
     * Get guard
     *
     * @return integer 
     */
    public function getGuard()
    {
        return $this->guard;
    }

    /**
     * Set entryTerritory
     *
     * @param string $entryTerritory
     * @return CIndustry
     */
    public function setEntryTerritory($entryTerritory)
    {
        $this->entryTerritory = $entryTerritory;

        return $this;
    }

    /**
     * Get entryTerritory
     *
     * @return string 
     */
    public function getEntryTerritory()
    {
        return $this->entryTerritory;
    }

    /**
     * Set parkingCarType
     *
     * @param string $parkingCarType
     * @return CIndustry
     */
    public function setParkingCarType($parkingCarType)
    {
        $this->parkingCarType = $parkingCarType;

        return $this;
    }

    /**
     * Get parkingCarType
     *
     * @return string 
     */
    public function getParkingCarType()
    {
        return $this->parkingCarType;
    }

    /**
     * Set parkingTruckType
     *
     * @param string $parkingTruckType
     * @return CIndustry
     */
    public function setParkingTruckType($parkingTruckType)
    {
        $this->parkingTruckType = $parkingTruckType;

        return $this;
    }

    /**
     * Get parkingTruckType
     *
     * @return string 
     */
    public function getParkingTruckType()
    {
        return $this->parkingTruckType;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return CIndustry
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set descriptionHandmade
     *
     * @param string $descriptionHandmade
     * @return CIndustry
     */
    public function setDescriptionHandmade($descriptionHandmade)
    {
        $this->descriptionHandmade = $descriptionHandmade;

        return $this;
    }

    /**
     * Get descriptionHandmade
     *
     * @return string 
     */
    public function getDescriptionHandmade()
    {
        return $this->descriptionHandmade;
    }

    /**
     * Set descriptionSale
     *
     * @param string $descriptionSale
     * @return CIndustry
     */
    public function setDescriptionSale($descriptionSale)
    {
        $this->descriptionSale = $descriptionSale;

        return $this;
    }

    /**
     * Get descriptionSale
     *
     * @return string 
     */
    public function getDescriptionSale()
    {
        return $this->descriptionSale;
    }

    /**
     * Set descriptionSaleHandmade
     *
     * @param string $descriptionSaleHandmade
     * @return CIndustry
     */
    public function setDescriptionSaleHandmade($descriptionSaleHandmade)
    {
        $this->descriptionSaleHandmade = $descriptionSaleHandmade;

        return $this;
    }

    /**
     * Get descriptionSaleHandmade
     *
     * @return string 
     */
    public function getDescriptionSaleHandmade()
    {
        return $this->descriptionSaleHandmade;
    }

    /**
     * Set descriptionSafeHandmade
     *
     * @param string $descriptionSafeHandmade
     * @return CIndustry
     */
    public function setDescriptionSafeHandmade($descriptionSafeHandmade)
    {
        $this->descriptionSafeHandmade = $descriptionSafeHandmade;

        return $this;
    }

    /**
     * Get descriptionSafeHandmade
     *
     * @return string 
     */
    public function getDescriptionSafeHandmade()
    {
        return $this->descriptionSafeHandmade;
    }

    /**
     * Set descriptionSafe
     *
     * @param string $descriptionSafe
     * @return CIndustry
     */
    public function setDescriptionSafe($descriptionSafe)
    {
        $this->descriptionSafe = $descriptionSafe;

        return $this;
    }

    /**
     * Get descriptionSafe
     *
     * @return string 
     */
    public function getDescriptionSafe()
    {
        return $this->descriptionSafe;
    }

    /**
     * Set descriptionSubrent
     *
     * @param string $descriptionSubrent
     * @return CIndustry
     */
    public function setDescriptionSubrent($descriptionSubrent)
    {
        $this->descriptionSubrent = $descriptionSubrent;

        return $this;
    }

    /**
     * Get descriptionSubrent
     *
     * @return string 
     */
    public function getDescriptionSubrent()
    {
        return $this->descriptionSubrent;
    }

    /**
     * Set descriptionSubrentHandmade
     *
     * @param string $descriptionSubrentHandmade
     * @return CIndustry
     */
    public function setDescriptionSubrentHandmade($descriptionSubrentHandmade)
    {
        $this->descriptionSubrentHandmade = $descriptionSubrentHandmade;

        return $this;
    }

    /**
     * Get descriptionSubrentHandmade
     *
     * @return string 
     */
    public function getDescriptionSubrentHandmade()
    {
        return $this->descriptionSubrentHandmade;
    }

    /**
     * Set path2fs
     *
     * @param string $path2fs
     * @return CIndustry
     */
    public function setPath2fs($path2fs)
    {
        $this->path2fs = $path2fs;

        return $this;
    }

    /**
     * Get path2fs
     *
     * @return string 
     */
    public function getPath2fs()
    {
        return $this->path2fs;
    }

    /**
     * Set infrastructure
     *
     * @param string $infrastructure
     * @return CIndustry
     */
    public function setInfrastructure($infrastructure)
    {
        $this->infrastructure = $infrastructure;

        return $this;
    }

    /**
     * Get infrastructure
     *
     * @return string 
     */
    public function getInfrastructure()
    {
        return $this->infrastructure;
    }

    /**
     * Set gas
     *
     * @param boolean $gas
     * @return CIndustry
     */
    public function setGas($gas)
    {
        $this->gas = $gas;

        return $this;
    }

    /**
     * Get gas
     *
     * @return boolean 
     */
    public function getGas()
    {
        return $this->gas;
    }

    /**
     * Set descriptionHandmadeUse
     *
     * @param boolean $descriptionHandmadeUse
     * @return CIndustry
     */
    public function setDescriptionHandmadeUse($descriptionHandmadeUse)
    {
        $this->descriptionHandmadeUse = $descriptionHandmadeUse;

        return $this;
    }

    /**
     * Get descriptionHandmadeUse
     *
     * @return boolean 
     */
    public function getDescriptionHandmadeUse()
    {
        return $this->descriptionHandmadeUse;
    }

    /**
     * Set descriptionSaleHandmadeUse
     *
     * @param boolean $descriptionSaleHandmadeUse
     * @return CIndustry
     */
    public function setDescriptionSaleHandmadeUse($descriptionSaleHandmadeUse)
    {
        $this->descriptionSaleHandmadeUse = $descriptionSaleHandmadeUse;

        return $this;
    }

    /**
     * Get descriptionSaleHandmadeUse
     *
     * @return boolean 
     */
    public function getDescriptionSaleHandmadeUse()
    {
        return $this->descriptionSaleHandmadeUse;
    }

    /**
     * Set descriptionSafeHandmadeUse
     *
     * @param boolean $descriptionSafeHandmadeUse
     * @return CIndustry
     */
    public function setDescriptionSafeHandmadeUse($descriptionSafeHandmadeUse)
    {
        $this->descriptionSafeHandmadeUse = $descriptionSafeHandmadeUse;

        return $this;
    }

    /**
     * Get descriptionSafeHandmadeUse
     *
     * @return boolean 
     */
    public function getDescriptionSafeHandmadeUse()
    {
        return $this->descriptionSafeHandmadeUse;
    }

    /**
     * Set descriptionSubrentHandmadeUse
     *
     * @param boolean $descriptionSubrentHandmadeUse
     * @return CIndustry
     */
    public function setDescriptionSubrentHandmadeUse($descriptionSubrentHandmadeUse)
    {
        $this->descriptionSubrentHandmadeUse = $descriptionSubrentHandmadeUse;

        return $this;
    }

    /**
     * Get descriptionSubrentHandmadeUse
     *
     * @return boolean 
     */
    public function getDescriptionSubrentHandmadeUse()
    {
        return $this->descriptionSubrentHandmadeUse;
    }

    /**
     * Set parkingCar
     *
     * @param boolean $parkingCar
     * @return CIndustry
     */
    public function setParkingCar($parkingCar)
    {
        $this->parkingCar = $parkingCar;

        return $this;
    }

    /**
     * Get parkingCar
     *
     * @return boolean 
     */
    public function getParkingCar()
    {
        return $this->parkingCar;
    }

    /**
     * Set parkingTruck
     *
     * @param boolean $parkingTruck
     * @return CIndustry
     */
    public function setParkingTruck($parkingTruck)
    {
        $this->parkingTruck = $parkingTruck;

        return $this;
    }

    /**
     * Get parkingTruck
     *
     * @return boolean 
     */
    public function getParkingTruck()
    {
        return $this->parkingTruck;
    }

    /**
     * Set vape
     *
     * @param boolean $vape
     * @return CIndustry
     */
    public function setVape($vape)
    {
        $this->vape = $vape;

        return $this;
    }

    /**
     * Get vape
     *
     * @return boolean 
     */
    public function getVape()
    {
        return $this->vape;
    }

    /**
     * Set deposit
     *
     * @param boolean $deposit
     * @return CIndustry
     */
    public function setDeposit($deposit)
    {
        $this->deposit = $deposit;

        return $this;
    }

    /**
     * Get deposit
     *
     * @return boolean 
     */
    public function getDeposit()
    {
        return $this->deposit;
    }

    /**
     * Set agentVisited
     *
     * @param boolean $agentVisited
     * @return CIndustry
     */
    public function setAgentVisited($agentVisited)
    {
        $this->agentVisited = $agentVisited;

        return $this;
    }

    /**
     * Get agentVisited
     *
     * @return boolean 
     */
    public function getAgentVisited()
    {
        return $this->agentVisited;
    }

    /**
     * Set agentVisitedSale
     *
     * @param boolean $agentVisitedSale
     * @return CIndustry
     */
    public function setAgentVisitedSale($agentVisitedSale)
    {
        $this->agentVisitedSale = $agentVisitedSale;

        return $this;
    }

    /**
     * Get agentVisitedSale
     *
     * @return boolean 
     */
    public function getAgentVisitedSale()
    {
        return $this->agentVisitedSale;
    }

    /**
     * Set agentVisitedSafe
     *
     * @param boolean $agentVisitedSafe
     * @return CIndustry
     */
    public function setAgentVisitedSafe($agentVisitedSafe)
    {
        $this->agentVisitedSafe = $agentVisitedSafe;

        return $this;
    }

    /**
     * Get agentVisitedSafe
     *
     * @return boolean 
     */
    public function getAgentVisitedSafe()
    {
        return $this->agentVisitedSafe;
    }

    /**
     * Set agentVisitedSubrent
     *
     * @param boolean $agentVisitedSubrent
     * @return CIndustry
     */
    public function setAgentVisitedSubrent($agentVisitedSubrent)
    {
        $this->agentVisitedSubrent = $agentVisitedSubrent;

        return $this;
    }

    /**
     * Get agentVisitedSubrent
     *
     * @return boolean 
     */
    public function getAgentVisitedSubrent()
    {
        return $this->agentVisitedSubrent;
    }

    /**
     * Set power
     *
     * @param string $power
     * @return CIndustry
     */
    public function setPower($power)
    {
        $this->power = $power;

        return $this;
    }

    /**
     * Get power
     *
     * @return string 
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * Set powerAll
     *
     * @param string $powerAll
     * @return CIndustry
     */
    public function setPowerAll($powerAll)
    {
        $this->powerAll = $powerAll;

        return $this;
    }

    /**
     * Get powerAll
     *
     * @return string 
     */
    public function getPowerAll()
    {
        return $this->powerAll;
    }

    /**
     * Set gasHow
     *
     * @param integer $gasHow
     * @return CIndustry
     */
    public function setGasHow($gasHow)
    {
        $this->gasHow = $gasHow;

        return $this;
    }

    /**
     * Get gasHow
     *
     * @return integer 
     */
    public function getGasHow()
    {
        return $this->gasHow;
    }

    /**
     * Set vapeHow
     *
     * @param integer $vapeHow
     * @return CIndustry
     */
    public function setVapeHow($vapeHow)
    {
        $this->vapeHow = $vapeHow;

        return $this;
    }

    /**
     * Get vapeHow
     *
     * @return integer 
     */
    public function getVapeHow()
    {
        return $this->vapeHow;
    }

    /**
     * Set water
     *
     * @param integer $water
     * @return CIndustry
     */
    public function setWater($water)
    {
        $this->water = $water;

        return $this;
    }

    /**
     * Get water
     *
     * @return integer 
     */
    public function getWater()
    {
        return $this->water;
    }

    /**
     * Set sewage
     *
     * @param integer $sewage
     * @return CIndustry
     */
    public function setSewage($sewage)
    {
        $this->sewage = $sewage;

        return $this;
    }

    /**
     * Get sewage
     *
     * @return integer 
     */
    public function getSewage()
    {
        return $this->sewage;
    }

    /**
     * Set heating
     *
     * @param integer $heating
     * @return CIndustry
     */
    public function setHeating($heating)
    {
        $this->heating = $heating;

        return $this;
    }

    /**
     * Get heating
     *
     * @return integer 
     */
    public function getHeating()
    {
        return $this->heating;
    }

    /**
     * Set ventilation
     *
     * @param integer $ventilation
     * @return CIndustry
     */
    public function setVentilation($ventilation)
    {
        $this->ventilation = $ventilation;

        return $this;
    }

    /**
     * Get ventilation
     *
     * @return integer 
     */
    public function getVentilation()
    {
        return $this->ventilation;
    }

    /**
     * Set internet
     *
     * @param integer $internet
     * @return CIndustry
     */
    public function setInternet($internet)
    {
        $this->internet = $internet;

        return $this;
    }

    /**
     * Get internet
     *
     * @return integer 
     */
    public function getInternet()
    {
        return $this->internet;
    }

    /**
     * Set safetySystems
     *
     * @param string $safetySystems
     * @return CIndustry
     */
    public function setSafetySystems($safetySystems)
    {
        $this->safetySystems = $safetySystems;

        return $this;
    }

    /**
     * Get safetySystems
     *
     * @return string 
     */
    public function getSafetySystems()
    {
        return $this->safetySystems;
    }

    /**
     * Set dealType
     *
     * @param string $dealType
     * @return CIndustry
     */
    public function setDealType($dealType)
    {
        $this->dealType = $dealType;

        return $this;
    }

    /**
     * Get dealType
     *
     * @return string 
     */
    public function getDealType()
    {
        return $this->dealType;
    }

    /**
     * Set salePrice
     *
     * @param integer $salePrice
     * @return CIndustry
     */
    public function setSalePrice($salePrice)
    {
        $this->salePrice = $salePrice;

        return $this;
    }

    /**
     * Get salePrice
     *
     * @return integer 
     */
    public function getSalePrice()
    {
        return $this->salePrice;
    }

    /**
     * Set salePriceMetr
     *
     * @param integer $salePriceMetr
     * @return CIndustry
     */
    public function setSalePriceMetr($salePriceMetr)
    {
        $this->salePriceMetr = $salePriceMetr;

        return $this;
    }

    /**
     * Get salePriceMetr
     *
     * @return integer 
     */
    public function getSalePriceMetr()
    {
        return $this->salePriceMetr;
    }

    /**
     * Set rentPrice
     *
     * @param integer $rentPrice
     * @return CIndustry
     */
    public function setRentPrice($rentPrice)
    {
        $this->rentPrice = $rentPrice;

        return $this;
    }

    /**
     * Get rentPrice
     *
     * @return integer 
     */
    public function getRentPrice()
    {
        return $this->rentPrice;
    }

    /**
     * Set subrentPrice
     *
     * @param integer $subrentPrice
     * @return CIndustry
     */
    public function setSubrentPrice($subrentPrice)
    {
        $this->subrentPrice = $subrentPrice;

        return $this;
    }

    /**
     * Get subrentPrice
     *
     * @return integer 
     */
    public function getSubrentPrice()
    {
        return $this->subrentPrice;
    }

    /**
     * Set rentPriceSafe
     *
     * @param integer $rentPriceSafe
     * @return CIndustry
     */
    public function setRentPriceSafe($rentPriceSafe)
    {
        $this->rentPriceSafe = $rentPriceSafe;

        return $this;
    }

    /**
     * Get rentPriceSafe
     *
     * @return integer 
     */
    public function getRentPriceSafe()
    {
        return $this->rentPriceSafe;
    }

    /**
     * Set officePrice
     *
     * @param integer $officePrice
     * @return CIndustry
     */
    public function setOfficePrice($officePrice)
    {
        $this->officePrice = $officePrice;

        return $this;
    }

    /**
     * Get officePrice
     *
     * @return integer 
     */
    public function getOfficePrice()
    {
        return $this->officePrice;
    }

    /**
     * Set officePriceSubrent
     *
     * @param integer $officePriceSubrent
     * @return CIndustry
     */
    public function setOfficePriceSubrent($officePriceSubrent)
    {
        $this->officePriceSubrent = $officePriceSubrent;

        return $this;
    }

    /**
     * Get officePriceSubrent
     *
     * @return integer 
     */
    public function getOfficePriceSubrent()
    {
        return $this->officePriceSubrent;
    }

    /**
     * Set mezzPrice
     *
     * @param integer $mezzPrice
     * @return CIndustry
     */
    public function setMezzPrice($mezzPrice)
    {
        $this->mezzPrice = $mezzPrice;

        return $this;
    }

    /**
     * Get mezzPrice
     *
     * @return integer 
     */
    public function getMezzPrice()
    {
        return $this->mezzPrice;
    }

    /**
     * Set mezzPriceSubrent
     *
     * @param integer $mezzPriceSubrent
     * @return CIndustry
     */
    public function setMezzPriceSubrent($mezzPriceSubrent)
    {
        $this->mezzPriceSubrent = $mezzPriceSubrent;

        return $this;
    }

    /**
     * Get mezzPriceSubrent
     *
     * @return integer 
     */
    public function getMezzPriceSubrent()
    {
        return $this->mezzPriceSubrent;
    }

    /**
     * Set rentInc
     *
     * @param string $rentInc
     * @return CIndustry
     */
    public function setRentInc($rentInc)
    {
        $this->rentInc = $rentInc;

        return $this;
    }

    /**
     * Get rentInc
     *
     * @return string 
     */
    public function getRentInc()
    {
        return $this->rentInc;
    }

    /**
     * Set rentIncSafe
     *
     * @param string $rentIncSafe
     * @return CIndustry
     */
    public function setRentIncSafe($rentIncSafe)
    {
        $this->rentIncSafe = $rentIncSafe;

        return $this;
    }

    /**
     * Get rentIncSafe
     *
     * @return string 
     */
    public function getRentIncSafe()
    {
        return $this->rentIncSafe;
    }

    /**
     * Set rentIncOffice
     *
     * @param string $rentIncOffice
     * @return CIndustry
     */
    public function setRentIncOffice($rentIncOffice)
    {
        $this->rentIncOffice = $rentIncOffice;

        return $this;
    }

    /**
     * Get rentIncOffice
     *
     * @return string 
     */
    public function getRentIncOffice()
    {
        return $this->rentIncOffice;
    }

    /**
     * Set incsCurrency
     *
     * @param string $incsCurrency
     * @return CIndustry
     */
    public function setIncsCurrency($incsCurrency)
    {
        $this->incsCurrency = $incsCurrency;

        return $this;
    }

    /**
     * Get incsCurrency
     *
     * @return string 
     */
    public function getIncsCurrency()
    {
        return $this->incsCurrency;
    }

    /**
     * Set incsCurrencySafe
     *
     * @param string $incsCurrencySafe
     * @return CIndustry
     */
    public function setIncsCurrencySafe($incsCurrencySafe)
    {
        $this->incsCurrencySafe = $incsCurrencySafe;

        return $this;
    }

    /**
     * Get incsCurrencySafe
     *
     * @return string 
     */
    public function getIncsCurrencySafe()
    {
        return $this->incsCurrencySafe;
    }

    /**
     * Set incsCurrencyAll
     *
     * @param string $incsCurrencyAll
     * @return CIndustry
     */
    public function setIncsCurrencyAll($incsCurrencyAll)
    {
        $this->incsCurrencyAll = $incsCurrencyAll;

        return $this;
    }

    /**
     * Get incsCurrencyAll
     *
     * @return string 
     */
    public function getIncsCurrencyAll()
    {
        return $this->incsCurrencyAll;
    }

    /**
     * Set incsCurrencyAllMetr
     *
     * @param string $incsCurrencyAllMetr
     * @return CIndustry
     */
    public function setIncsCurrencyAllMetr($incsCurrencyAllMetr)
    {
        $this->incsCurrencyAllMetr = $incsCurrencyAllMetr;

        return $this;
    }

    /**
     * Get incsCurrencyAllMetr
     *
     * @return string 
     */
    public function getIncsCurrencyAllMetr()
    {
        return $this->incsCurrencyAllMetr;
    }

    /**
     * Set incsCurrencyOffice
     *
     * @param string $incsCurrencyOffice
     * @return CIndustry
     */
    public function setIncsCurrencyOffice($incsCurrencyOffice)
    {
        $this->incsCurrencyOffice = $incsCurrencyOffice;

        return $this;
    }

    /**
     * Get incsCurrencyOffice
     *
     * @return string 
     */
    public function getIncsCurrencyOffice()
    {
        return $this->incsCurrencyOffice;
    }

    /**
     * Set result
     *
     * @param integer $result
     * @return CIndustry
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get result
     *
     * @return integer 
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Set resultWho
     *
     * @param integer $resultWho
     * @return CIndustry
     */
    public function setResultWho($resultWho)
    {
        $this->resultWho = $resultWho;

        return $this;
    }

    /**
     * Get resultWho
     *
     * @return integer 
     */
    public function getResultWho()
    {
        return $this->resultWho;
    }

    /**
     * Set cX
     *
     * @param float $cX
     * @return CIndustry
     */
    public function setCX($cX)
    {
        $this->cX = $cX;

        return $this;
    }

    /**
     * Get cX
     *
     * @return float 
     */
    public function getCX()
    {
        return $this->cX;
    }

    /**
     * Set cXBackup
     *
     * @param float $cXBackup
     * @return CIndustry
     */
    public function setCXBackup($cXBackup)
    {
        $this->cXBackup = $cXBackup;

        return $this;
    }

    /**
     * Get cXBackup
     *
     * @return float 
     */
    public function getCXBackup()
    {
        return $this->cXBackup;
    }

    /**
     * Set cY
     *
     * @param float $cY
     * @return CIndustry
     */
    public function setCY($cY)
    {
        $this->cY = $cY;

        return $this;
    }

    /**
     * Get cY
     *
     * @return float 
     */
    public function getCY()
    {
        return $this->cY;
    }

    /**
     * Set cYBackup
     *
     * @param float $cYBackup
     * @return CIndustry
     */
    public function setCYBackup($cYBackup)
    {
        $this->cYBackup = $cYBackup;

        return $this;
    }

    /**
     * Get cYBackup
     *
     * @return float 
     */
    public function getCYBackup()
    {
        return $this->cYBackup;
    }

    /**
     * Set cMap
     *
     * @param string $cMap
     * @return CIndustry
     */
    public function setCMap($cMap)
    {
        $this->cMap = $cMap;

        return $this;
    }

    /**
     * Get cMap
     *
     * @return string 
     */
    public function getCMap()
    {
        return $this->cMap;
    }

    /**
     * Set dtUpdate
     *
     * @param \DateTime $dtUpdate
     * @return CIndustry
     */
    public function setDtUpdate($dtUpdate)
    {
        $this->dtUpdate = $dtUpdate;

        return $this;
    }

    /**
     * Get dtUpdate
     *
     * @return \DateTime 
     */
    public function getDtUpdate()
    {
        return $this->dtUpdate;
    }

    /**
     * Set dtUpdateFull
     *
     * @param \DateTime $dtUpdateFull
     * @return CIndustry
     */
    public function setDtUpdateFull($dtUpdateFull)
    {
        $this->dtUpdateFull = $dtUpdateFull;

        return $this;
    }

    /**
     * Get dtUpdateFull
     *
     * @return \DateTime 
     */
    public function getDtUpdateFull()
    {
        return $this->dtUpdateFull;
    }

    /**
     * Set agent
     *
     * @param integer $agent
     * @return CIndustry
     */
    public function setAgent($agent)
    {
        $this->agent = $agent;

        return $this;
    }

    /**
     * Get agent
     *
     * @return integer 
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * Set agentSale
     *
     * @param integer $agentSale
     * @return CIndustry
     */
    public function setAgentSale($agentSale)
    {
        $this->agentSale = $agentSale;

        return $this;
    }

    /**
     * Get agentSale
     *
     * @return integer 
     */
    public function getAgentSale()
    {
        return $this->agentSale;
    }

    /**
     * Set agentSafe
     *
     * @param integer $agentSafe
     * @return CIndustry
     */
    public function setAgentSafe($agentSafe)
    {
        $this->agentSafe = $agentSafe;

        return $this;
    }

    /**
     * Get agentSafe
     *
     * @return integer 
     */
    public function getAgentSafe()
    {
        return $this->agentSafe;
    }

    /**
     * Set agentSubrent
     *
     * @param integer $agentSubrent
     * @return CIndustry
     */
    public function setAgentSubrent($agentSubrent)
    {
        $this->agentSubrent = $agentSubrent;

        return $this;
    }

    /**
     * Get agentSubrent
     *
     * @return integer 
     */
    public function getAgentSubrent()
    {
        return $this->agentSubrent;
    }

    /**
     * Set oldAgent
     *
     * @param integer $oldAgent
     * @return CIndustry
     */
    public function setOldAgent($oldAgent)
    {
        $this->oldAgent = $oldAgent;

        return $this;
    }

    /**
     * Get oldAgent
     *
     * @return integer 
     */
    public function getOldAgent()
    {
        return $this->oldAgent;
    }

    /**
     * Set onsite
     *
     * @param boolean $onsite
     * @return CIndustry
     */
    public function setOnsite($onsite)
    {
        $this->onsite = $onsite;

        return $this;
    }

    /**
     * Get onsite
     *
     * @return boolean 
     */
    public function getOnsite()
    {
        return $this->onsite;
    }

    /**
     * Set dogovor
     *
     * @param boolean $dogovor
     * @return CIndustry
     */
    public function setDogovor($dogovor)
    {
        $this->dogovor = $dogovor;

        return $this;
    }

    /**
     * Get dogovor
     *
     * @return boolean 
     */
    public function getDogovor()
    {
        return $this->dogovor;
    }

    /**
     * Set onsiteTop
     *
     * @param boolean $onsiteTop
     * @return CIndustry
     */
    public function setOnsiteTop($onsiteTop)
    {
        $this->onsiteTop = $onsiteTop;

        return $this;
    }

    /**
     * Get onsiteTop
     *
     * @return boolean 
     */
    public function getOnsiteTop()
    {
        return $this->onsiteTop;
    }

    /**
     * Set electricityIncluded
     *
     * @param boolean $electricityIncluded
     * @return CIndustry
     */
    public function setElectricityIncluded($electricityIncluded)
    {
        $this->electricityIncluded = $electricityIncluded;

        return $this;
    }

    /**
     * Get electricityIncluded
     *
     * @return boolean 
     */
    public function getElectricityIncluded()
    {
        return $this->electricityIncluded;
    }

    /**
     * Set onsiteNopriceSale
     *
     * @param boolean $onsiteNopriceSale
     * @return CIndustry
     */
    public function setOnsiteNopriceSale($onsiteNopriceSale)
    {
        $this->onsiteNopriceSale = $onsiteNopriceSale;

        return $this;
    }

    /**
     * Get onsiteNopriceSale
     *
     * @return boolean 
     */
    public function getOnsiteNopriceSale()
    {
        return $this->onsiteNopriceSale;
    }

    /**
     * Set onsiteNopriceRent
     *
     * @param boolean $onsiteNopriceRent
     * @return CIndustry
     */
    public function setOnsiteNopriceRent($onsiteNopriceRent)
    {
        $this->onsiteNopriceRent = $onsiteNopriceRent;

        return $this;
    }

    /**
     * Get onsiteNopriceRent
     *
     * @return boolean 
     */
    public function getOnsiteNopriceRent()
    {
        return $this->onsiteNopriceRent;
    }

    /**
     * Set onsiteNopriceSubrent
     *
     * @param boolean $onsiteNopriceSubrent
     * @return CIndustry
     */
    public function setOnsiteNopriceSubrent($onsiteNopriceSubrent)
    {
        $this->onsiteNopriceSubrent = $onsiteNopriceSubrent;

        return $this;
    }

    /**
     * Get onsiteNopriceSubrent
     *
     * @return boolean 
     */
    public function getOnsiteNopriceSubrent()
    {
        return $this->onsiteNopriceSubrent;
    }

    /**
     * Set onsiteNopriceSafe
     *
     * @param boolean $onsiteNopriceSafe
     * @return CIndustry
     */
    public function setOnsiteNopriceSafe($onsiteNopriceSafe)
    {
        $this->onsiteNopriceSafe = $onsiteNopriceSafe;

        return $this;
    }

    /**
     * Get onsiteNopriceSafe
     *
     * @return boolean 
     */
    public function getOnsiteNopriceSafe()
    {
        return $this->onsiteNopriceSafe;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return CIndustry
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set slcomments
     *
     * @param string $slcomments
     * @return CIndustry
     */
    public function setSlcomments($slcomments)
    {
        $this->slcomments = $slcomments;

        return $this;
    }

    /**
     * Get slcomments
     *
     * @return string 
     */
    public function getSlcomments()
    {
        return $this->slcomments;
    }

    /**
     * Set openstage
     *
     * @param integer $openstage
     * @return CIndustry
     */
    public function setOpenstage($openstage)
    {
        $this->openstage = $openstage;

        return $this;
    }

    /**
     * Get openstage
     *
     * @return integer 
     */
    public function getOpenstage()
    {
        return $this->openstage;
    }

    /**
     * Set ownerPaysHowmuch
     *
     * @param string $ownerPaysHowmuch
     * @return CIndustry
     */
    public function setOwnerPaysHowmuch($ownerPaysHowmuch)
    {
        $this->ownerPaysHowmuch = $ownerPaysHowmuch;

        return $this;
    }

    /**
     * Get ownerPaysHowmuch
     *
     * @return string 
     */
    public function getOwnerPaysHowmuch()
    {
        return $this->ownerPaysHowmuch;
    }

    /**
     * Set ownerPaysHowmuchSale
     *
     * @param string $ownerPaysHowmuchSale
     * @return CIndustry
     */
    public function setOwnerPaysHowmuchSale($ownerPaysHowmuchSale)
    {
        $this->ownerPaysHowmuchSale = $ownerPaysHowmuchSale;

        return $this;
    }

    /**
     * Get ownerPaysHowmuchSale
     *
     * @return string 
     */
    public function getOwnerPaysHowmuchSale()
    {
        return $this->ownerPaysHowmuchSale;
    }

    /**
     * Set ownerPaysHowmuchNot
     *
     * @param boolean $ownerPaysHowmuchNot
     * @return CIndustry
     */
    public function setOwnerPaysHowmuchNot($ownerPaysHowmuchNot)
    {
        $this->ownerPaysHowmuchNot = $ownerPaysHowmuchNot;

        return $this;
    }

    /**
     * Get ownerPaysHowmuchNot
     *
     * @return boolean 
     */
    public function getOwnerPaysHowmuchNot()
    {
        return $this->ownerPaysHowmuchNot;
    }

    /**
     * Set ownerPaysHowmuchNotSale
     *
     * @param boolean $ownerPaysHowmuchNotSale
     * @return CIndustry
     */
    public function setOwnerPaysHowmuchNotSale($ownerPaysHowmuchNotSale)
    {
        $this->ownerPaysHowmuchNotSale = $ownerPaysHowmuchNotSale;

        return $this;
    }

    /**
     * Get ownerPaysHowmuchNotSale
     *
     * @return boolean 
     */
    public function getOwnerPaysHowmuchNotSale()
    {
        return $this->ownerPaysHowmuchNotSale;
    }

    /**
     * Set ownerPaysHowmuchRentholidays
     *
     * @param boolean $ownerPaysHowmuchRentholidays
     * @return CIndustry
     */
    public function setOwnerPaysHowmuchRentholidays($ownerPaysHowmuchRentholidays)
    {
        $this->ownerPaysHowmuchRentholidays = $ownerPaysHowmuchRentholidays;

        return $this;
    }

    /**
     * Get ownerPaysHowmuchRentholidays
     *
     * @return boolean 
     */
    public function getOwnerPaysHowmuchRentholidays()
    {
        return $this->ownerPaysHowmuchRentholidays;
    }

    /**
     * Set ownerPaysHowmuch4client
     *
     * @param string $ownerPaysHowmuch4client
     * @return CIndustry
     */
    public function setOwnerPaysHowmuch4client($ownerPaysHowmuch4client)
    {
        $this->ownerPaysHowmuch4client = $ownerPaysHowmuch4client;

        return $this;
    }

    /**
     * Get ownerPaysHowmuch4client
     *
     * @return string 
     */
    public function getOwnerPaysHowmuch4client()
    {
        return $this->ownerPaysHowmuch4client;
    }

    /**
     * Set ownerPaysHowmuch4clientSale
     *
     * @param string $ownerPaysHowmuch4clientSale
     * @return CIndustry
     */
    public function setOwnerPaysHowmuch4clientSale($ownerPaysHowmuch4clientSale)
    {
        $this->ownerPaysHowmuch4clientSale = $ownerPaysHowmuch4clientSale;

        return $this;
    }

    /**
     * Get ownerPaysHowmuch4clientSale
     *
     * @return string 
     */
    public function getOwnerPaysHowmuch4clientSale()
    {
        return $this->ownerPaysHowmuch4clientSale;
    }

    /**
     * Set ownerPaysHowmuch4clientNot
     *
     * @param boolean $ownerPaysHowmuch4clientNot
     * @return CIndustry
     */
    public function setOwnerPaysHowmuch4clientNot($ownerPaysHowmuch4clientNot)
    {
        $this->ownerPaysHowmuch4clientNot = $ownerPaysHowmuch4clientNot;

        return $this;
    }

    /**
     * Get ownerPaysHowmuch4clientNot
     *
     * @return boolean 
     */
    public function getOwnerPaysHowmuch4clientNot()
    {
        return $this->ownerPaysHowmuch4clientNot;
    }

    /**
     * Set ownerPaysHowmuch4clientNotSale
     *
     * @param boolean $ownerPaysHowmuch4clientNotSale
     * @return CIndustry
     */
    public function setOwnerPaysHowmuch4clientNotSale($ownerPaysHowmuch4clientNotSale)
    {
        $this->ownerPaysHowmuch4clientNotSale = $ownerPaysHowmuch4clientNotSale;

        return $this;
    }

    /**
     * Get ownerPaysHowmuch4clientNotSale
     *
     * @return boolean 
     */
    public function getOwnerPaysHowmuch4clientNotSale()
    {
        return $this->ownerPaysHowmuch4clientNotSale;
    }

    /**
     * Set dtDogovor
     *
     * @param \DateTime $dtDogovor
     * @return CIndustry
     */
    public function setDtDogovor($dtDogovor)
    {
        $this->dtDogovor = $dtDogovor;

        return $this;
    }

    /**
     * Get dtDogovor
     *
     * @return \DateTime 
     */
    public function getDtDogovor()
    {
        return $this->dtDogovor;
    }

    /**
     * Set suitable4foodProduction
     *
     * @param string $suitable4foodProduction
     * @return CIndustry
     */
    public function setSuitable4foodProduction($suitable4foodProduction)
    {
        $this->suitable4foodProduction = $suitable4foodProduction;

        return $this;
    }

    /**
     * Get suitable4foodProduction
     *
     * @return string 
     */
    public function getSuitable4foodProduction()
    {
        return $this->suitable4foodProduction;
    }

    /**
     * Set suitable4foodProductionSale
     *
     * @param string $suitable4foodProductionSale
     * @return CIndustry
     */
    public function setSuitable4foodProductionSale($suitable4foodProductionSale)
    {
        $this->suitable4foodProductionSale = $suitable4foodProductionSale;

        return $this;
    }

    /**
     * Get suitable4foodProductionSale
     *
     * @return string 
     */
    public function getSuitable4foodProductionSale()
    {
        return $this->suitable4foodProductionSale;
    }

    /**
     * Set suitable4foodProductionHandmade
     *
     * @param string $suitable4foodProductionHandmade
     * @return CIndustry
     */
    public function setSuitable4foodProductionHandmade($suitable4foodProductionHandmade)
    {
        $this->suitable4foodProductionHandmade = $suitable4foodProductionHandmade;

        return $this;
    }

    /**
     * Get suitable4foodProductionHandmade
     *
     * @return string 
     */
    public function getSuitable4foodProductionHandmade()
    {
        return $this->suitable4foodProductionHandmade;
    }

    /**
     * Set suitable4foodProductionSaleHandmade
     *
     * @param string $suitable4foodProductionSaleHandmade
     * @return CIndustry
     */
    public function setSuitable4foodProductionSaleHandmade($suitable4foodProductionSaleHandmade)
    {
        $this->suitable4foodProductionSaleHandmade = $suitable4foodProductionSaleHandmade;

        return $this;
    }

    /**
     * Get suitable4foodProductionSaleHandmade
     *
     * @return string 
     */
    public function getSuitable4foodProductionSaleHandmade()
    {
        return $this->suitable4foodProductionSaleHandmade;
    }

    /**
     * Set suitable4garmentManufacturing
     *
     * @param string $suitable4garmentManufacturing
     * @return CIndustry
     */
    public function setSuitable4garmentManufacturing($suitable4garmentManufacturing)
    {
        $this->suitable4garmentManufacturing = $suitable4garmentManufacturing;

        return $this;
    }

    /**
     * Get suitable4garmentManufacturing
     *
     * @return string 
     */
    public function getSuitable4garmentManufacturing()
    {
        return $this->suitable4garmentManufacturing;
    }

    /**
     * Set suitable4garmentManufacturingSale
     *
     * @param string $suitable4garmentManufacturingSale
     * @return CIndustry
     */
    public function setSuitable4garmentManufacturingSale($suitable4garmentManufacturingSale)
    {
        $this->suitable4garmentManufacturingSale = $suitable4garmentManufacturingSale;

        return $this;
    }

    /**
     * Get suitable4garmentManufacturingSale
     *
     * @return string 
     */
    public function getSuitable4garmentManufacturingSale()
    {
        return $this->suitable4garmentManufacturingSale;
    }

    /**
     * Set suitable4garmentManufacturingHandmade
     *
     * @param string $suitable4garmentManufacturingHandmade
     * @return CIndustry
     */
    public function setSuitable4garmentManufacturingHandmade($suitable4garmentManufacturingHandmade)
    {
        $this->suitable4garmentManufacturingHandmade = $suitable4garmentManufacturingHandmade;

        return $this;
    }

    /**
     * Get suitable4garmentManufacturingHandmade
     *
     * @return string 
     */
    public function getSuitable4garmentManufacturingHandmade()
    {
        return $this->suitable4garmentManufacturingHandmade;
    }

    /**
     * Set suitable4garmentManufacturingSaleHandmade
     *
     * @param string $suitable4garmentManufacturingSaleHandmade
     * @return CIndustry
     */
    public function setSuitable4garmentManufacturingSaleHandmade($suitable4garmentManufacturingSaleHandmade)
    {
        $this->suitable4garmentManufacturingSaleHandmade = $suitable4garmentManufacturingSaleHandmade;

        return $this;
    }

    /**
     * Get suitable4garmentManufacturingSaleHandmade
     *
     * @return string 
     */
    public function getSuitable4garmentManufacturingSaleHandmade()
    {
        return $this->suitable4garmentManufacturingSaleHandmade;
    }

    /**
     * Set suitable4autoservice
     *
     * @param string $suitable4autoservice
     * @return CIndustry
     */
    public function setSuitable4autoservice($suitable4autoservice)
    {
        $this->suitable4autoservice = $suitable4autoservice;

        return $this;
    }

    /**
     * Get suitable4autoservice
     *
     * @return string 
     */
    public function getSuitable4autoservice()
    {
        return $this->suitable4autoservice;
    }

    /**
     * Set suitable4autoserviceSale
     *
     * @param string $suitable4autoserviceSale
     * @return CIndustry
     */
    public function setSuitable4autoserviceSale($suitable4autoserviceSale)
    {
        $this->suitable4autoserviceSale = $suitable4autoserviceSale;

        return $this;
    }

    /**
     * Get suitable4autoserviceSale
     *
     * @return string 
     */
    public function getSuitable4autoserviceSale()
    {
        return $this->suitable4autoserviceSale;
    }

    /**
     * Set suitable4autoserviceHandmade
     *
     * @param string $suitable4autoserviceHandmade
     * @return CIndustry
     */
    public function setSuitable4autoserviceHandmade($suitable4autoserviceHandmade)
    {
        $this->suitable4autoserviceHandmade = $suitable4autoserviceHandmade;

        return $this;
    }

    /**
     * Get suitable4autoserviceHandmade
     *
     * @return string 
     */
    public function getSuitable4autoserviceHandmade()
    {
        return $this->suitable4autoserviceHandmade;
    }

    /**
     * Set suitable4autoserviceSaleHandmade
     *
     * @param string $suitable4autoserviceSaleHandmade
     * @return CIndustry
     */
    public function setSuitable4autoserviceSaleHandmade($suitable4autoserviceSaleHandmade)
    {
        $this->suitable4autoserviceSaleHandmade = $suitable4autoserviceSaleHandmade;

        return $this;
    }

    /**
     * Get suitable4autoserviceSaleHandmade
     *
     * @return string 
     */
    public function getSuitable4autoserviceSaleHandmade()
    {
        return $this->suitable4autoserviceSaleHandmade;
    }

    /**
     * Set bargainRent
     *
     * @param boolean $bargainRent
     * @return CIndustry
     */
    public function setBargainRent($bargainRent)
    {
        $this->bargainRent = $bargainRent;

        return $this;
    }

    /**
     * Get bargainRent
     *
     * @return boolean 
     */
    public function getBargainRent()
    {
        return $this->bargainRent;
    }

    /**
     * Set bargainSale
     *
     * @param boolean $bargainSale
     * @return CIndustry
     */
    public function setBargainSale($bargainSale)
    {
        $this->bargainSale = $bargainSale;

        return $this;
    }

    /**
     * Get bargainSale
     *
     * @return boolean 
     */
    public function getBargainSale()
    {
        return $this->bargainSale;
    }

    /**
     * Set bargainOffice
     *
     * @param boolean $bargainOffice
     * @return CIndustry
     */
    public function setBargainOffice($bargainOffice)
    {
        $this->bargainOffice = $bargainOffice;

        return $this;
    }

    /**
     * Get bargainOffice
     *
     * @return boolean 
     */
    public function getBargainOffice()
    {
        return $this->bargainOffice;
    }

    /**
     * Set bargainSafe
     *
     * @param boolean $bargainSafe
     * @return CIndustry
     */
    public function setBargainSafe($bargainSafe)
    {
        $this->bargainSafe = $bargainSafe;

        return $this;
    }

    /**
     * Get bargainSafe
     *
     * @return boolean 
     */
    public function getBargainSafe()
    {
        return $this->bargainSafe;
    }

    /**
     * Set importSaleCian
     *
     * @param boolean $importSaleCian
     * @return CIndustry
     */
    public function setImportSaleCian($importSaleCian)
    {
        $this->importSaleCian = $importSaleCian;

        return $this;
    }

    /**
     * Get importSaleCian
     *
     * @return boolean 
     */
    public function getImportSaleCian()
    {
        return $this->importSaleCian;
    }

    /**
     * Set importSaleIrr
     *
     * @param boolean $importSaleIrr
     * @return CIndustry
     */
    public function setImportSaleIrr($importSaleIrr)
    {
        $this->importSaleIrr = $importSaleIrr;

        return $this;
    }

    /**
     * Get importSaleIrr
     *
     * @return boolean 
     */
    public function getImportSaleIrr()
    {
        return $this->importSaleIrr;
    }

    /**
     * Set importSaleIrrVip
     *
     * @param boolean $importSaleIrrVip
     * @return CIndustry
     */
    public function setImportSaleIrrVip($importSaleIrrVip)
    {
        $this->importSaleIrrVip = $importSaleIrrVip;

        return $this;
    }

    /**
     * Get importSaleIrrVip
     *
     * @return boolean 
     */
    public function getImportSaleIrrVip()
    {
        return $this->importSaleIrrVip;
    }

    /**
     * Set importSaleIrrPremium
     *
     * @param boolean $importSaleIrrPremium
     * @return CIndustry
     */
    public function setImportSaleIrrPremium($importSaleIrrPremium)
    {
        $this->importSaleIrrPremium = $importSaleIrrPremium;

        return $this;
    }

    /**
     * Get importSaleIrrPremium
     *
     * @return boolean 
     */
    public function getImportSaleIrrPremium()
    {
        return $this->importSaleIrrPremium;
    }

    /**
     * Set importSaleIrrMarkup
     *
     * @param boolean $importSaleIrrMarkup
     * @return CIndustry
     */
    public function setImportSaleIrrMarkup($importSaleIrrMarkup)
    {
        $this->importSaleIrrMarkup = $importSaleIrrMarkup;

        return $this;
    }

    /**
     * Get importSaleIrrMarkup
     *
     * @return boolean 
     */
    public function getImportSaleIrrMarkup()
    {
        return $this->importSaleIrrMarkup;
    }

    /**
     * Set importSaleIrrPushup
     *
     * @param boolean $importSaleIrrPushup
     * @return CIndustry
     */
    public function setImportSaleIrrPushup($importSaleIrrPushup)
    {
        $this->importSaleIrrPushup = $importSaleIrrPushup;

        return $this;
    }

    /**
     * Get importSaleIrrPushup
     *
     * @return boolean 
     */
    public function getImportSaleIrrPushup()
    {
        return $this->importSaleIrrPushup;
    }

    /**
     * Set importSaleFree
     *
     * @param boolean $importSaleFree
     * @return CIndustry
     */
    public function setImportSaleFree($importSaleFree)
    {
        $this->importSaleFree = $importSaleFree;

        return $this;
    }

    /**
     * Get importSaleFree
     *
     * @return boolean 
     */
    public function getImportSaleFree()
    {
        return $this->importSaleFree;
    }

    /**
     * Set importSaleYandex
     *
     * @param boolean $importSaleYandex
     * @return CIndustry
     */
    public function setImportSaleYandex($importSaleYandex)
    {
        $this->importSaleYandex = $importSaleYandex;

        return $this;
    }

    /**
     * Get importSaleYandex
     *
     * @return boolean 
     */
    public function getImportSaleYandex()
    {
        return $this->importSaleYandex;
    }

    /**
     * Set importRentCian
     *
     * @param boolean $importRentCian
     * @return CIndustry
     */
    public function setImportRentCian($importRentCian)
    {
        $this->importRentCian = $importRentCian;

        return $this;
    }

    /**
     * Get importRentCian
     *
     * @return boolean 
     */
    public function getImportRentCian()
    {
        return $this->importRentCian;
    }

    /**
     * Set importRentIrr
     *
     * @param boolean $importRentIrr
     * @return CIndustry
     */
    public function setImportRentIrr($importRentIrr)
    {
        $this->importRentIrr = $importRentIrr;

        return $this;
    }

    /**
     * Get importRentIrr
     *
     * @return boolean 
     */
    public function getImportRentIrr()
    {
        return $this->importRentIrr;
    }

    /**
     * Set importRentIrrVip
     *
     * @param boolean $importRentIrrVip
     * @return CIndustry
     */
    public function setImportRentIrrVip($importRentIrrVip)
    {
        $this->importRentIrrVip = $importRentIrrVip;

        return $this;
    }

    /**
     * Get importRentIrrVip
     *
     * @return boolean 
     */
    public function getImportRentIrrVip()
    {
        return $this->importRentIrrVip;
    }

    /**
     * Set importRentIrrPremium
     *
     * @param boolean $importRentIrrPremium
     * @return CIndustry
     */
    public function setImportRentIrrPremium($importRentIrrPremium)
    {
        $this->importRentIrrPremium = $importRentIrrPremium;

        return $this;
    }

    /**
     * Get importRentIrrPremium
     *
     * @return boolean 
     */
    public function getImportRentIrrPremium()
    {
        return $this->importRentIrrPremium;
    }

    /**
     * Set importRentIrrMarkup
     *
     * @param boolean $importRentIrrMarkup
     * @return CIndustry
     */
    public function setImportRentIrrMarkup($importRentIrrMarkup)
    {
        $this->importRentIrrMarkup = $importRentIrrMarkup;

        return $this;
    }

    /**
     * Get importRentIrrMarkup
     *
     * @return boolean 
     */
    public function getImportRentIrrMarkup()
    {
        return $this->importRentIrrMarkup;
    }

    /**
     * Set importRentIrrPushup
     *
     * @param boolean $importRentIrrPushup
     * @return CIndustry
     */
    public function setImportRentIrrPushup($importRentIrrPushup)
    {
        $this->importRentIrrPushup = $importRentIrrPushup;

        return $this;
    }

    /**
     * Get importRentIrrPushup
     *
     * @return boolean 
     */
    public function getImportRentIrrPushup()
    {
        return $this->importRentIrrPushup;
    }

    /**
     * Set importRentFree
     *
     * @param boolean $importRentFree
     * @return CIndustry
     */
    public function setImportRentFree($importRentFree)
    {
        $this->importRentFree = $importRentFree;

        return $this;
    }

    /**
     * Get importRentFree
     *
     * @return boolean 
     */
    public function getImportRentFree()
    {
        return $this->importRentFree;
    }

    /**
     * Set importRentYandex
     *
     * @param boolean $importRentYandex
     * @return CIndustry
     */
    public function setImportRentYandex($importRentYandex)
    {
        $this->importRentYandex = $importRentYandex;

        return $this;
    }

    /**
     * Get importRentYandex
     *
     * @return boolean 
     */
    public function getImportRentYandex()
    {
        return $this->importRentYandex;
    }

    /**
     * Set importSaleCianPremium
     *
     * @param boolean $importSaleCianPremium
     * @return CIndustry
     */
    public function setImportSaleCianPremium($importSaleCianPremium)
    {
        $this->importSaleCianPremium = $importSaleCianPremium;

        return $this;
    }

    /**
     * Get importSaleCianPremium
     *
     * @return boolean 
     */
    public function getImportSaleCianPremium()
    {
        return $this->importSaleCianPremium;
    }

    /**
     * Set importRentCianPremium
     *
     * @param boolean $importRentCianPremium
     * @return CIndustry
     */
    public function setImportRentCianPremium($importRentCianPremium)
    {
        $this->importRentCianPremium = $importRentCianPremium;

        return $this;
    }

    /**
     * Get importRentCianPremium
     *
     * @return boolean 
     */
    public function getImportRentCianPremium()
    {
        return $this->importRentCianPremium;
    }

    /**
     * Set importSaleCianTop3
     *
     * @param boolean $importSaleCianTop3
     * @return CIndustry
     */
    public function setImportSaleCianTop3($importSaleCianTop3)
    {
        $this->importSaleCianTop3 = $importSaleCianTop3;

        return $this;
    }

    /**
     * Get importSaleCianTop3
     *
     * @return boolean 
     */
    public function getImportSaleCianTop3()
    {
        return $this->importSaleCianTop3;
    }

    /**
     * Set importRentCianTop3
     *
     * @param boolean $importRentCianTop3
     * @return CIndustry
     */
    public function setImportRentCianTop3($importRentCianTop3)
    {
        $this->importRentCianTop3 = $importRentCianTop3;

        return $this;
    }

    /**
     * Get importRentCianTop3
     *
     * @return boolean 
     */
    public function getImportRentCianTop3()
    {
        return $this->importRentCianTop3;
    }

    /**
     * Set importSaleCianHl
     *
     * @param boolean $importSaleCianHl
     * @return CIndustry
     */
    public function setImportSaleCianHl($importSaleCianHl)
    {
        $this->importSaleCianHl = $importSaleCianHl;

        return $this;
    }

    /**
     * Get importSaleCianHl
     *
     * @return boolean 
     */
    public function getImportSaleCianHl()
    {
        return $this->importSaleCianHl;
    }

    /**
     * Set importRentCianHl
     *
     * @param boolean $importRentCianHl
     * @return CIndustry
     */
    public function setImportRentCianHl($importRentCianHl)
    {
        $this->importRentCianHl = $importRentCianHl;

        return $this;
    }

    /**
     * Get importRentCianHl
     *
     * @return boolean 
     */
    public function getImportRentCianHl()
    {
        return $this->importRentCianHl;
    }

    /**
     * Set currency
     *
     * @param integer $currency
     * @return CIndustry
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return integer 
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set currencySafe
     *
     * @param integer $currencySafe
     * @return CIndustry
     */
    public function setCurrencySafe($currencySafe)
    {
        $this->currencySafe = $currencySafe;

        return $this;
    }

    /**
     * Get currencySafe
     *
     * @return integer 
     */
    public function getCurrencySafe()
    {
        return $this->currencySafe;
    }

    /**
     * Set currencyAll
     *
     * @param integer $currencyAll
     * @return CIndustry
     */
    public function setCurrencyAll($currencyAll)
    {
        $this->currencyAll = $currencyAll;

        return $this;
    }

    /**
     * Get currencyAll
     *
     * @return integer 
     */
    public function getCurrencyAll()
    {
        return $this->currencyAll;
    }

    /**
     * Set currencyAllMetr
     *
     * @param integer $currencyAllMetr
     * @return CIndustry
     */
    public function setCurrencyAllMetr($currencyAllMetr)
    {
        $this->currencyAllMetr = $currencyAllMetr;

        return $this;
    }

    /**
     * Get currencyAllMetr
     *
     * @return integer 
     */
    public function getCurrencyAllMetr()
    {
        return $this->currencyAllMetr;
    }

    /**
     * Set currencyOffice
     *
     * @param integer $currencyOffice
     * @return CIndustry
     */
    public function setCurrencyOffice($currencyOffice)
    {
        $this->currencyOffice = $currencyOffice;

        return $this;
    }

    /**
     * Get currencyOffice
     *
     * @return integer 
     */
    public function getCurrencyOffice()
    {
        return $this->currencyOffice;
    }

    /**
     * Set fromMetro
     *
     * @param integer $fromMetro
     * @return CIndustry
     */
    public function setFromMetro($fromMetro)
    {
        $this->fromMetro = $fromMetro;

        return $this;
    }

    /**
     * Get fromMetro
     *
     * @return integer 
     */
    public function getFromMetro()
    {
        return $this->fromMetro;
    }

    /**
     * Set fromMetroBy
     *
     * @param integer $fromMetroBy
     * @return CIndustry
     */
    public function setFromMetroBy($fromMetroBy)
    {
        $this->fromMetroBy = $fromMetroBy;

        return $this;
    }

    /**
     * Get fromMetroBy
     *
     * @return integer 
     */
    public function getFromMetroBy()
    {
        return $this->fromMetroBy;
    }

    /**
     * Set railwayStation
     *
     * @param integer $railwayStation
     * @return CIndustry
     */
    public function setRailwayStation($railwayStation)
    {
        $this->railwayStation = $railwayStation;

        return $this;
    }

    /**
     * Get railwayStation
     *
     * @return integer 
     */
    public function getRailwayStation()
    {
        return $this->railwayStation;
    }

    /**
     * Set entranceType
     *
     * @param integer $entranceType
     * @return CIndustry
     */
    public function setEntranceType($entranceType)
    {
        $this->entranceType = $entranceType;

        return $this;
    }

    /**
     * Get entranceType
     *
     * @return integer 
     */
    public function getEntranceType()
    {
        return $this->entranceType;
    }

    /**
     * Set plainType
     *
     * @param integer $plainType
     * @return CIndustry
     */
    public function setPlainType($plainType)
    {
        $this->plainType = $plainType;

        return $this;
    }

    /**
     * Get plainType
     *
     * @return integer 
     */
    public function getPlainType()
    {
        return $this->plainType;
    }

    /**
     * Set calcRentCeilingHeight
     *
     * @param string $calcRentCeilingHeight
     * @return CIndustry
     */
    public function setCalcRentCeilingHeight($calcRentCeilingHeight)
    {
        $this->calcRentCeilingHeight = $calcRentCeilingHeight;

        return $this;
    }

    /**
     * Get calcRentCeilingHeight
     *
     * @return string 
     */
    public function getCalcRentCeilingHeight()
    {
        return $this->calcRentCeilingHeight;
    }

    /**
     * Set calcRentCeilingHeight2
     *
     * @param string $calcRentCeilingHeight2
     * @return CIndustry
     */
    public function setCalcRentCeilingHeight2($calcRentCeilingHeight2)
    {
        $this->calcRentCeilingHeight2 = $calcRentCeilingHeight2;

        return $this;
    }

    /**
     * Get calcRentCeilingHeight2
     *
     * @return string 
     */
    public function getCalcRentCeilingHeight2()
    {
        return $this->calcRentCeilingHeight2;
    }

    /**
     * Set calcSaleCeilingHeight
     *
     * @param string $calcSaleCeilingHeight
     * @return CIndustry
     */
    public function setCalcSaleCeilingHeight($calcSaleCeilingHeight)
    {
        $this->calcSaleCeilingHeight = $calcSaleCeilingHeight;

        return $this;
    }

    /**
     * Get calcSaleCeilingHeight
     *
     * @return string 
     */
    public function getCalcSaleCeilingHeight()
    {
        return $this->calcSaleCeilingHeight;
    }

    /**
     * Set calcSaleCeilingHeight2
     *
     * @param string $calcSaleCeilingHeight2
     * @return CIndustry
     */
    public function setCalcSaleCeilingHeight2($calcSaleCeilingHeight2)
    {
        $this->calcSaleCeilingHeight2 = $calcSaleCeilingHeight2;

        return $this;
    }

    /**
     * Get calcSaleCeilingHeight2
     *
     * @return string 
     */
    public function getCalcSaleCeilingHeight2()
    {
        return $this->calcSaleCeilingHeight2;
    }

    /**
     * Set calcRentGateType
     *
     * @param string $calcRentGateType
     * @return CIndustry
     */
    public function setCalcRentGateType($calcRentGateType)
    {
        $this->calcRentGateType = $calcRentGateType;

        return $this;
    }

    /**
     * Get calcRentGateType
     *
     * @return string 
     */
    public function getCalcRentGateType()
    {
        return $this->calcRentGateType;
    }

    /**
     * Set calcSaleGateType
     *
     * @param string $calcSaleGateType
     * @return CIndustry
     */
    public function setCalcSaleGateType($calcSaleGateType)
    {
        $this->calcSaleGateType = $calcSaleGateType;

        return $this;
    }

    /**
     * Get calcSaleGateType
     *
     * @return string 
     */
    public function getCalcSaleGateType()
    {
        return $this->calcSaleGateType;
    }

    /**
     * Set calcRentGatesNumber
     *
     * @param string $calcRentGatesNumber
     * @return CIndustry
     */
    public function setCalcRentGatesNumber($calcRentGatesNumber)
    {
        $this->calcRentGatesNumber = $calcRentGatesNumber;

        return $this;
    }

    /**
     * Get calcRentGatesNumber
     *
     * @return string 
     */
    public function getCalcRentGatesNumber()
    {
        return $this->calcRentGatesNumber;
    }

    /**
     * Set calcSaleGatesNumber
     *
     * @param string $calcSaleGatesNumber
     * @return CIndustry
     */
    public function setCalcSaleGatesNumber($calcSaleGatesNumber)
    {
        $this->calcSaleGatesNumber = $calcSaleGatesNumber;

        return $this;
    }

    /**
     * Get calcSaleGatesNumber
     *
     * @return string 
     */
    public function getCalcSaleGatesNumber()
    {
        return $this->calcSaleGatesNumber;
    }

    /**
     * Set calcRentFloorType
     *
     * @param string $calcRentFloorType
     * @return CIndustry
     */
    public function setCalcRentFloorType($calcRentFloorType)
    {
        $this->calcRentFloorType = $calcRentFloorType;

        return $this;
    }

    /**
     * Get calcRentFloorType
     *
     * @return string 
     */
    public function getCalcRentFloorType()
    {
        return $this->calcRentFloorType;
    }

    /**
     * Set calcSaleFloorType
     *
     * @param string $calcSaleFloorType
     * @return CIndustry
     */
    public function setCalcSaleFloorType($calcSaleFloorType)
    {
        $this->calcSaleFloorType = $calcSaleFloorType;

        return $this;
    }

    /**
     * Get calcSaleFloorType
     *
     * @return string 
     */
    public function getCalcSaleFloorType()
    {
        return $this->calcSaleFloorType;
    }

    /**
     * Set calcRentFloorLoad
     *
     * @param string $calcRentFloorLoad
     * @return CIndustry
     */
    public function setCalcRentFloorLoad($calcRentFloorLoad)
    {
        $this->calcRentFloorLoad = $calcRentFloorLoad;

        return $this;
    }

    /**
     * Get calcRentFloorLoad
     *
     * @return string 
     */
    public function getCalcRentFloorLoad()
    {
        return $this->calcRentFloorLoad;
    }

    /**
     * Set calcSaleFloorLoad
     *
     * @param string $calcSaleFloorLoad
     * @return CIndustry
     */
    public function setCalcSaleFloorLoad($calcSaleFloorLoad)
    {
        $this->calcSaleFloorLoad = $calcSaleFloorLoad;

        return $this;
    }

    /**
     * Get calcSaleFloorLoad
     *
     * @return string 
     */
    public function getCalcSaleFloorLoad()
    {
        return $this->calcSaleFloorLoad;
    }

    /**
     * Set calcRentCollonMesh
     *
     * @param string $calcRentCollonMesh
     * @return CIndustry
     */
    public function setCalcRentCollonMesh($calcRentCollonMesh)
    {
        $this->calcRentCollonMesh = $calcRentCollonMesh;

        return $this;
    }

    /**
     * Get calcRentCollonMesh
     *
     * @return string 
     */
    public function getCalcRentCollonMesh()
    {
        return $this->calcRentCollonMesh;
    }

    /**
     * Set calcSaleCollonMesh
     *
     * @param string $calcSaleCollonMesh
     * @return CIndustry
     */
    public function setCalcSaleCollonMesh($calcSaleCollonMesh)
    {
        $this->calcSaleCollonMesh = $calcSaleCollonMesh;

        return $this;
    }

    /**
     * Get calcSaleCollonMesh
     *
     * @return string 
     */
    public function getCalcSaleCollonMesh()
    {
        return $this->calcSaleCollonMesh;
    }

    /**
     * Set calcRentHeated
     *
     * @param string $calcRentHeated
     * @return CIndustry
     */
    public function setCalcRentHeated($calcRentHeated)
    {
        $this->calcRentHeated = $calcRentHeated;

        return $this;
    }

    /**
     * Get calcRentHeated
     *
     * @return string 
     */
    public function getCalcRentHeated()
    {
        return $this->calcRentHeated;
    }

    /**
     * Set calcSaleHeated
     *
     * @param string $calcSaleHeated
     * @return CIndustry
     */
    public function setCalcSaleHeated($calcSaleHeated)
    {
        $this->calcSaleHeated = $calcSaleHeated;

        return $this;
    }

    /**
     * Get calcSaleHeated
     *
     * @return string 
     */
    public function getCalcSaleHeated()
    {
        return $this->calcSaleHeated;
    }

    /**
     * Set calcRentTelphers
     *
     * @param string $calcRentTelphers
     * @return CIndustry
     */
    public function setCalcRentTelphers($calcRentTelphers)
    {
        $this->calcRentTelphers = $calcRentTelphers;

        return $this;
    }

    /**
     * Get calcRentTelphers
     *
     * @return string 
     */
    public function getCalcRentTelphers()
    {
        return $this->calcRentTelphers;
    }

    /**
     * Set calcSaleTelphers
     *
     * @param string $calcSaleTelphers
     * @return CIndustry
     */
    public function setCalcSaleTelphers($calcSaleTelphers)
    {
        $this->calcSaleTelphers = $calcSaleTelphers;

        return $this;
    }

    /**
     * Get calcSaleTelphers
     *
     * @return string 
     */
    public function getCalcSaleTelphers()
    {
        return $this->calcSaleTelphers;
    }

    /**
     * Set calcRentCatheads
     *
     * @param string $calcRentCatheads
     * @return CIndustry
     */
    public function setCalcRentCatheads($calcRentCatheads)
    {
        $this->calcRentCatheads = $calcRentCatheads;

        return $this;
    }

    /**
     * Get calcRentCatheads
     *
     * @return string 
     */
    public function getCalcRentCatheads()
    {
        return $this->calcRentCatheads;
    }

    /**
     * Set calcSaleCatheads
     *
     * @param string $calcSaleCatheads
     * @return CIndustry
     */
    public function setCalcSaleCatheads($calcSaleCatheads)
    {
        $this->calcSaleCatheads = $calcSaleCatheads;

        return $this;
    }

    /**
     * Get calcSaleCatheads
     *
     * @return string 
     */
    public function getCalcSaleCatheads()
    {
        return $this->calcSaleCatheads;
    }

    /**
     * Set calcRentOverheadCranes
     *
     * @param string $calcRentOverheadCranes
     * @return CIndustry
     */
    public function setCalcRentOverheadCranes($calcRentOverheadCranes)
    {
        $this->calcRentOverheadCranes = $calcRentOverheadCranes;

        return $this;
    }

    /**
     * Get calcRentOverheadCranes
     *
     * @return string 
     */
    public function getCalcRentOverheadCranes()
    {
        return $this->calcRentOverheadCranes;
    }

    /**
     * Set calcSaleOverheadCranes
     *
     * @param string $calcSaleOverheadCranes
     * @return CIndustry
     */
    public function setCalcSaleOverheadCranes($calcSaleOverheadCranes)
    {
        $this->calcSaleOverheadCranes = $calcSaleOverheadCranes;

        return $this;
    }

    /**
     * Get calcSaleOverheadCranes
     *
     * @return string 
     */
    public function getCalcSaleOverheadCranes()
    {
        return $this->calcSaleOverheadCranes;
    }

    /**
     * Set calcRentSElevators
     *
     * @param string $calcRentSElevators
     * @return CIndustry
     */
    public function setCalcRentSElevators($calcRentSElevators)
    {
        $this->calcRentSElevators = $calcRentSElevators;

        return $this;
    }

    /**
     * Get calcRentSElevators
     *
     * @return string 
     */
    public function getCalcRentSElevators()
    {
        return $this->calcRentSElevators;
    }

    /**
     * Set calcSaleSElevators
     *
     * @param string $calcSaleSElevators
     * @return CIndustry
     */
    public function setCalcSaleSElevators($calcSaleSElevators)
    {
        $this->calcSaleSElevators = $calcSaleSElevators;

        return $this;
    }

    /**
     * Get calcSaleSElevators
     *
     * @return string 
     */
    public function getCalcSaleSElevators()
    {
        return $this->calcSaleSElevators;
    }

    /**
     * Set calcRentAreaMezz
     *
     * @param string $calcRentAreaMezz
     * @return CIndustry
     */
    public function setCalcRentAreaMezz($calcRentAreaMezz)
    {
        $this->calcRentAreaMezz = $calcRentAreaMezz;

        return $this;
    }

    /**
     * Get calcRentAreaMezz
     *
     * @return string 
     */
    public function getCalcRentAreaMezz()
    {
        return $this->calcRentAreaMezz;
    }

    /**
     * Set calcRentAreaOffice
     *
     * @param string $calcRentAreaOffice
     * @return CIndustry
     */
    public function setCalcRentAreaOffice($calcRentAreaOffice)
    {
        $this->calcRentAreaOffice = $calcRentAreaOffice;

        return $this;
    }

    /**
     * Get calcRentAreaOffice
     *
     * @return string 
     */
    public function getCalcRentAreaOffice()
    {
        return $this->calcRentAreaOffice;
    }

    /**
     * Set calcSaleAreaMezz
     *
     * @param string $calcSaleAreaMezz
     * @return CIndustry
     */
    public function setCalcSaleAreaMezz($calcSaleAreaMezz)
    {
        $this->calcSaleAreaMezz = $calcSaleAreaMezz;

        return $this;
    }

    /**
     * Get calcSaleAreaMezz
     *
     * @return string 
     */
    public function getCalcSaleAreaMezz()
    {
        return $this->calcSaleAreaMezz;
    }

    /**
     * Set calcSaleAreaOffice
     *
     * @param string $calcSaleAreaOffice
     * @return CIndustry
     */
    public function setCalcSaleAreaOffice($calcSaleAreaOffice)
    {
        $this->calcSaleAreaOffice = $calcSaleAreaOffice;

        return $this;
    }

    /**
     * Get calcSaleAreaOffice
     *
     * @return string 
     */
    public function getCalcSaleAreaOffice()
    {
        return $this->calcSaleAreaOffice;
    }

    /**
     * Set calcSubrentCeilingHeight
     *
     * @param string $calcSubrentCeilingHeight
     * @return CIndustry
     */
    public function setCalcSubrentCeilingHeight($calcSubrentCeilingHeight)
    {
        $this->calcSubrentCeilingHeight = $calcSubrentCeilingHeight;

        return $this;
    }

    /**
     * Get calcSubrentCeilingHeight
     *
     * @return string 
     */
    public function getCalcSubrentCeilingHeight()
    {
        return $this->calcSubrentCeilingHeight;
    }

    /**
     * Set calcSubrentCeilingHeight2
     *
     * @param string $calcSubrentCeilingHeight2
     * @return CIndustry
     */
    public function setCalcSubrentCeilingHeight2($calcSubrentCeilingHeight2)
    {
        $this->calcSubrentCeilingHeight2 = $calcSubrentCeilingHeight2;

        return $this;
    }

    /**
     * Get calcSubrentCeilingHeight2
     *
     * @return string 
     */
    public function getCalcSubrentCeilingHeight2()
    {
        return $this->calcSubrentCeilingHeight2;
    }

    /**
     * Set calcSubrentGateType
     *
     * @param string $calcSubrentGateType
     * @return CIndustry
     */
    public function setCalcSubrentGateType($calcSubrentGateType)
    {
        $this->calcSubrentGateType = $calcSubrentGateType;

        return $this;
    }

    /**
     * Get calcSubrentGateType
     *
     * @return string 
     */
    public function getCalcSubrentGateType()
    {
        return $this->calcSubrentGateType;
    }

    /**
     * Set calcSubrentGatesNumber
     *
     * @param string $calcSubrentGatesNumber
     * @return CIndustry
     */
    public function setCalcSubrentGatesNumber($calcSubrentGatesNumber)
    {
        $this->calcSubrentGatesNumber = $calcSubrentGatesNumber;

        return $this;
    }

    /**
     * Get calcSubrentGatesNumber
     *
     * @return string 
     */
    public function getCalcSubrentGatesNumber()
    {
        return $this->calcSubrentGatesNumber;
    }

    /**
     * Set calcSubrentFloorType
     *
     * @param string $calcSubrentFloorType
     * @return CIndustry
     */
    public function setCalcSubrentFloorType($calcSubrentFloorType)
    {
        $this->calcSubrentFloorType = $calcSubrentFloorType;

        return $this;
    }

    /**
     * Get calcSubrentFloorType
     *
     * @return string 
     */
    public function getCalcSubrentFloorType()
    {
        return $this->calcSubrentFloorType;
    }

    /**
     * Set calcSubrentFloorLoad
     *
     * @param string $calcSubrentFloorLoad
     * @return CIndustry
     */
    public function setCalcSubrentFloorLoad($calcSubrentFloorLoad)
    {
        $this->calcSubrentFloorLoad = $calcSubrentFloorLoad;

        return $this;
    }

    /**
     * Get calcSubrentFloorLoad
     *
     * @return string 
     */
    public function getCalcSubrentFloorLoad()
    {
        return $this->calcSubrentFloorLoad;
    }

    /**
     * Set calcSubrentCollonMesh
     *
     * @param string $calcSubrentCollonMesh
     * @return CIndustry
     */
    public function setCalcSubrentCollonMesh($calcSubrentCollonMesh)
    {
        $this->calcSubrentCollonMesh = $calcSubrentCollonMesh;

        return $this;
    }

    /**
     * Get calcSubrentCollonMesh
     *
     * @return string 
     */
    public function getCalcSubrentCollonMesh()
    {
        return $this->calcSubrentCollonMesh;
    }

    /**
     * Set calcSubrentHeated
     *
     * @param string $calcSubrentHeated
     * @return CIndustry
     */
    public function setCalcSubrentHeated($calcSubrentHeated)
    {
        $this->calcSubrentHeated = $calcSubrentHeated;

        return $this;
    }

    /**
     * Get calcSubrentHeated
     *
     * @return string 
     */
    public function getCalcSubrentHeated()
    {
        return $this->calcSubrentHeated;
    }

    /**
     * Set calcSubrentTelphers
     *
     * @param string $calcSubrentTelphers
     * @return CIndustry
     */
    public function setCalcSubrentTelphers($calcSubrentTelphers)
    {
        $this->calcSubrentTelphers = $calcSubrentTelphers;

        return $this;
    }

    /**
     * Get calcSubrentTelphers
     *
     * @return string 
     */
    public function getCalcSubrentTelphers()
    {
        return $this->calcSubrentTelphers;
    }

    /**
     * Set calcSubrentCatheads
     *
     * @param string $calcSubrentCatheads
     * @return CIndustry
     */
    public function setCalcSubrentCatheads($calcSubrentCatheads)
    {
        $this->calcSubrentCatheads = $calcSubrentCatheads;

        return $this;
    }

    /**
     * Get calcSubrentCatheads
     *
     * @return string 
     */
    public function getCalcSubrentCatheads()
    {
        return $this->calcSubrentCatheads;
    }

    /**
     * Set calcSubrentOverheadCranes
     *
     * @param string $calcSubrentOverheadCranes
     * @return CIndustry
     */
    public function setCalcSubrentOverheadCranes($calcSubrentOverheadCranes)
    {
        $this->calcSubrentOverheadCranes = $calcSubrentOverheadCranes;

        return $this;
    }

    /**
     * Get calcSubrentOverheadCranes
     *
     * @return string 
     */
    public function getCalcSubrentOverheadCranes()
    {
        return $this->calcSubrentOverheadCranes;
    }

    /**
     * Set calcSubrentSElevators
     *
     * @param string $calcSubrentSElevators
     * @return CIndustry
     */
    public function setCalcSubrentSElevators($calcSubrentSElevators)
    {
        $this->calcSubrentSElevators = $calcSubrentSElevators;

        return $this;
    }

    /**
     * Get calcSubrentSElevators
     *
     * @return string 
     */
    public function getCalcSubrentSElevators()
    {
        return $this->calcSubrentSElevators;
    }

    /**
     * Set calcSubrentAreaMezz
     *
     * @param string $calcSubrentAreaMezz
     * @return CIndustry
     */
    public function setCalcSubrentAreaMezz($calcSubrentAreaMezz)
    {
        $this->calcSubrentAreaMezz = $calcSubrentAreaMezz;

        return $this;
    }

    /**
     * Get calcSubrentAreaMezz
     *
     * @return string 
     */
    public function getCalcSubrentAreaMezz()
    {
        return $this->calcSubrentAreaMezz;
    }

    /**
     * Set calcSubrentAreaOffice
     *
     * @param string $calcSubrentAreaOffice
     * @return CIndustry
     */
    public function setCalcSubrentAreaOffice($calcSubrentAreaOffice)
    {
        $this->calcSubrentAreaOffice = $calcSubrentAreaOffice;

        return $this;
    }

    /**
     * Get calcSubrentAreaOffice
     *
     * @return string 
     */
    public function getCalcSubrentAreaOffice()
    {
        return $this->calcSubrentAreaOffice;
    }

    /**
     * Set calcSafeCeilingHeight
     *
     * @param string $calcSafeCeilingHeight
     * @return CIndustry
     */
    public function setCalcSafeCeilingHeight($calcSafeCeilingHeight)
    {
        $this->calcSafeCeilingHeight = $calcSafeCeilingHeight;

        return $this;
    }

    /**
     * Get calcSafeCeilingHeight
     *
     * @return string 
     */
    public function getCalcSafeCeilingHeight()
    {
        return $this->calcSafeCeilingHeight;
    }

    /**
     * Set calcSafeCeilingHeight2
     *
     * @param string $calcSafeCeilingHeight2
     * @return CIndustry
     */
    public function setCalcSafeCeilingHeight2($calcSafeCeilingHeight2)
    {
        $this->calcSafeCeilingHeight2 = $calcSafeCeilingHeight2;

        return $this;
    }

    /**
     * Get calcSafeCeilingHeight2
     *
     * @return string 
     */
    public function getCalcSafeCeilingHeight2()
    {
        return $this->calcSafeCeilingHeight2;
    }

    /**
     * Set calcSafeGateType
     *
     * @param string $calcSafeGateType
     * @return CIndustry
     */
    public function setCalcSafeGateType($calcSafeGateType)
    {
        $this->calcSafeGateType = $calcSafeGateType;

        return $this;
    }

    /**
     * Get calcSafeGateType
     *
     * @return string 
     */
    public function getCalcSafeGateType()
    {
        return $this->calcSafeGateType;
    }

    /**
     * Set calcSafeGatesNumber
     *
     * @param string $calcSafeGatesNumber
     * @return CIndustry
     */
    public function setCalcSafeGatesNumber($calcSafeGatesNumber)
    {
        $this->calcSafeGatesNumber = $calcSafeGatesNumber;

        return $this;
    }

    /**
     * Get calcSafeGatesNumber
     *
     * @return string 
     */
    public function getCalcSafeGatesNumber()
    {
        return $this->calcSafeGatesNumber;
    }

    /**
     * Set calcSafeFloorType
     *
     * @param string $calcSafeFloorType
     * @return CIndustry
     */
    public function setCalcSafeFloorType($calcSafeFloorType)
    {
        $this->calcSafeFloorType = $calcSafeFloorType;

        return $this;
    }

    /**
     * Get calcSafeFloorType
     *
     * @return string 
     */
    public function getCalcSafeFloorType()
    {
        return $this->calcSafeFloorType;
    }

    /**
     * Set calcSafeFloorLoad
     *
     * @param string $calcSafeFloorLoad
     * @return CIndustry
     */
    public function setCalcSafeFloorLoad($calcSafeFloorLoad)
    {
        $this->calcSafeFloorLoad = $calcSafeFloorLoad;

        return $this;
    }

    /**
     * Get calcSafeFloorLoad
     *
     * @return string 
     */
    public function getCalcSafeFloorLoad()
    {
        return $this->calcSafeFloorLoad;
    }

    /**
     * Set calcSafeCollonMesh
     *
     * @param string $calcSafeCollonMesh
     * @return CIndustry
     */
    public function setCalcSafeCollonMesh($calcSafeCollonMesh)
    {
        $this->calcSafeCollonMesh = $calcSafeCollonMesh;

        return $this;
    }

    /**
     * Get calcSafeCollonMesh
     *
     * @return string 
     */
    public function getCalcSafeCollonMesh()
    {
        return $this->calcSafeCollonMesh;
    }

    /**
     * Set calcSafeHeated
     *
     * @param string $calcSafeHeated
     * @return CIndustry
     */
    public function setCalcSafeHeated($calcSafeHeated)
    {
        $this->calcSafeHeated = $calcSafeHeated;

        return $this;
    }

    /**
     * Get calcSafeHeated
     *
     * @return string 
     */
    public function getCalcSafeHeated()
    {
        return $this->calcSafeHeated;
    }

    /**
     * Set calcSafeTelphers
     *
     * @param string $calcSafeTelphers
     * @return CIndustry
     */
    public function setCalcSafeTelphers($calcSafeTelphers)
    {
        $this->calcSafeTelphers = $calcSafeTelphers;

        return $this;
    }

    /**
     * Get calcSafeTelphers
     *
     * @return string 
     */
    public function getCalcSafeTelphers()
    {
        return $this->calcSafeTelphers;
    }

    /**
     * Set calcSafeCatheads
     *
     * @param string $calcSafeCatheads
     * @return CIndustry
     */
    public function setCalcSafeCatheads($calcSafeCatheads)
    {
        $this->calcSafeCatheads = $calcSafeCatheads;

        return $this;
    }

    /**
     * Get calcSafeCatheads
     *
     * @return string 
     */
    public function getCalcSafeCatheads()
    {
        return $this->calcSafeCatheads;
    }

    /**
     * Set calcSafeOverheadCranes
     *
     * @param string $calcSafeOverheadCranes
     * @return CIndustry
     */
    public function setCalcSafeOverheadCranes($calcSafeOverheadCranes)
    {
        $this->calcSafeOverheadCranes = $calcSafeOverheadCranes;

        return $this;
    }

    /**
     * Get calcSafeOverheadCranes
     *
     * @return string 
     */
    public function getCalcSafeOverheadCranes()
    {
        return $this->calcSafeOverheadCranes;
    }

    /**
     * Set calcSafeSElevators
     *
     * @param string $calcSafeSElevators
     * @return CIndustry
     */
    public function setCalcSafeSElevators($calcSafeSElevators)
    {
        $this->calcSafeSElevators = $calcSafeSElevators;

        return $this;
    }

    /**
     * Get calcSafeSElevators
     *
     * @return string 
     */
    public function getCalcSafeSElevators()
    {
        return $this->calcSafeSElevators;
    }

    /**
     * Set calcSafeAreaMezz
     *
     * @param string $calcSafeAreaMezz
     * @return CIndustry
     */
    public function setCalcSafeAreaMezz($calcSafeAreaMezz)
    {
        $this->calcSafeAreaMezz = $calcSafeAreaMezz;

        return $this;
    }

    /**
     * Get calcSafeAreaMezz
     *
     * @return string 
     */
    public function getCalcSafeAreaMezz()
    {
        return $this->calcSafeAreaMezz;
    }

    /**
     * Set calcSafeAreaOffice
     *
     * @param string $calcSafeAreaOffice
     * @return CIndustry
     */
    public function setCalcSafeAreaOffice($calcSafeAreaOffice)
    {
        $this->calcSafeAreaOffice = $calcSafeAreaOffice;

        return $this;
    }

    /**
     * Get calcSafeAreaOffice
     *
     * @return string 
     */
    public function getCalcSafeAreaOffice()
    {
        return $this->calcSafeAreaOffice;
    }

    /**
     * Set calcSaleWarehouseEquipment
     *
     * @param string $calcSaleWarehouseEquipment
     * @return CIndustry
     */
    public function setCalcSaleWarehouseEquipment($calcSaleWarehouseEquipment)
    {
        $this->calcSaleWarehouseEquipment = $calcSaleWarehouseEquipment;

        return $this;
    }

    /**
     * Get calcSaleWarehouseEquipment
     *
     * @return string 
     */
    public function getCalcSaleWarehouseEquipment()
    {
        return $this->calcSaleWarehouseEquipment;
    }

    /**
     * Set calcSafeWarehouseEquipment
     *
     * @param string $calcSafeWarehouseEquipment
     * @return CIndustry
     */
    public function setCalcSafeWarehouseEquipment($calcSafeWarehouseEquipment)
    {
        $this->calcSafeWarehouseEquipment = $calcSafeWarehouseEquipment;

        return $this;
    }

    /**
     * Get calcSafeWarehouseEquipment
     *
     * @return string 
     */
    public function getCalcSafeWarehouseEquipment()
    {
        return $this->calcSafeWarehouseEquipment;
    }

    /**
     * Set calcRentWarehouseEquipment
     *
     * @param string $calcRentWarehouseEquipment
     * @return CIndustry
     */
    public function setCalcRentWarehouseEquipment($calcRentWarehouseEquipment)
    {
        $this->calcRentWarehouseEquipment = $calcRentWarehouseEquipment;

        return $this;
    }

    /**
     * Get calcRentWarehouseEquipment
     *
     * @return string 
     */
    public function getCalcRentWarehouseEquipment()
    {
        return $this->calcRentWarehouseEquipment;
    }

    /**
     * Set calcSubrentWarehouseEquipment
     *
     * @param string $calcSubrentWarehouseEquipment
     * @return CIndustry
     */
    public function setCalcSubrentWarehouseEquipment($calcSubrentWarehouseEquipment)
    {
        $this->calcSubrentWarehouseEquipment = $calcSubrentWarehouseEquipment;

        return $this;
    }

    /**
     * Get calcSubrentWarehouseEquipment
     *
     * @return string 
     */
    public function getCalcSubrentWarehouseEquipment()
    {
        return $this->calcSubrentWarehouseEquipment;
    }

    /**
     * Set calcSalePayinc
     *
     * @param string $calcSalePayinc
     * @return CIndustry
     */
    public function setCalcSalePayinc($calcSalePayinc)
    {
        $this->calcSalePayinc = $calcSalePayinc;

        return $this;
    }

    /**
     * Get calcSalePayinc
     *
     * @return string 
     */
    public function getCalcSalePayinc()
    {
        return $this->calcSalePayinc;
    }

    /**
     * Set calcSafePayinc
     *
     * @param string $calcSafePayinc
     * @return CIndustry
     */
    public function setCalcSafePayinc($calcSafePayinc)
    {
        $this->calcSafePayinc = $calcSafePayinc;

        return $this;
    }

    /**
     * Get calcSafePayinc
     *
     * @return string 
     */
    public function getCalcSafePayinc()
    {
        return $this->calcSafePayinc;
    }

    /**
     * Set calcRentPayinc
     *
     * @param string $calcRentPayinc
     * @return CIndustry
     */
    public function setCalcRentPayinc($calcRentPayinc)
    {
        $this->calcRentPayinc = $calcRentPayinc;

        return $this;
    }

    /**
     * Get calcRentPayinc
     *
     * @return string 
     */
    public function getCalcRentPayinc()
    {
        return $this->calcRentPayinc;
    }

    /**
     * Set calcSubrentPayinc
     *
     * @param string $calcSubrentPayinc
     * @return CIndustry
     */
    public function setCalcSubrentPayinc($calcSubrentPayinc)
    {
        $this->calcSubrentPayinc = $calcSubrentPayinc;

        return $this;
    }

    /**
     * Get calcSubrentPayinc
     *
     * @return string 
     */
    public function getCalcSubrentPayinc()
    {
        return $this->calcSubrentPayinc;
    }

    /**
     * Set safePriceRack
     *
     * @param integer $safePriceRack
     * @return CIndustry
     */
    public function setSafePriceRack($safePriceRack)
    {
        $this->safePriceRack = $safePriceRack;

        return $this;
    }

    /**
     * Get safePriceRack
     *
     * @return integer 
     */
    public function getSafePriceRack()
    {
        return $this->safePriceRack;
    }

    /**
     * Set safePriceRackOversized
     *
     * @param integer $safePriceRackOversized
     * @return CIndustry
     */
    public function setSafePriceRackOversized($safePriceRackOversized)
    {
        $this->safePriceRackOversized = $safePriceRackOversized;

        return $this;
    }

    /**
     * Get safePriceRackOversized
     *
     * @return integer 
     */
    public function getSafePriceRackOversized()
    {
        return $this->safePriceRackOversized;
    }

    /**
     * Set safePriceCell
     *
     * @param integer $safePriceCell
     * @return CIndustry
     */
    public function setSafePriceCell($safePriceCell)
    {
        $this->safePriceCell = $safePriceCell;

        return $this;
    }

    /**
     * Get safePriceCell
     *
     * @return integer 
     */
    public function getSafePriceCell()
    {
        return $this->safePriceCell;
    }

    /**
     * Set safePriceFloor
     *
     * @param integer $safePriceFloor
     * @return CIndustry
     */
    public function setSafePriceFloor($safePriceFloor)
    {
        $this->safePriceFloor = $safePriceFloor;

        return $this;
    }

    /**
     * Get safePriceFloor
     *
     * @return integer 
     */
    public function getSafePriceFloor()
    {
        return $this->safePriceFloor;
    }

    /**
     * Set safePriceFloorOversized
     *
     * @param integer $safePriceFloorOversized
     * @return CIndustry
     */
    public function setSafePriceFloorOversized($safePriceFloorOversized)
    {
        $this->safePriceFloorOversized = $safePriceFloorOversized;

        return $this;
    }

    /**
     * Get safePriceFloorOversized
     *
     * @return integer 
     */
    public function getSafePriceFloorOversized()
    {
        return $this->safePriceFloorOversized;
    }

    /**
     * Set calcRentCountActiveBlocks
     *
     * @param integer $calcRentCountActiveBlocks
     * @return CIndustry
     */
    public function setCalcRentCountActiveBlocks($calcRentCountActiveBlocks)
    {
        $this->calcRentCountActiveBlocks = $calcRentCountActiveBlocks;

        return $this;
    }

    /**
     * Get calcRentCountActiveBlocks
     *
     * @return integer 
     */
    public function getCalcRentCountActiveBlocks()
    {
        return $this->calcRentCountActiveBlocks;
    }

    /**
     * Set calcSaleCountActiveBlocks
     *
     * @param integer $calcSaleCountActiveBlocks
     * @return CIndustry
     */
    public function setCalcSaleCountActiveBlocks($calcSaleCountActiveBlocks)
    {
        $this->calcSaleCountActiveBlocks = $calcSaleCountActiveBlocks;

        return $this;
    }

    /**
     * Get calcSaleCountActiveBlocks
     *
     * @return integer 
     */
    public function getCalcSaleCountActiveBlocks()
    {
        return $this->calcSaleCountActiveBlocks;
    }

    /**
     * Set calcSafeCountActiveBlocks
     *
     * @param integer $calcSafeCountActiveBlocks
     * @return CIndustry
     */
    public function setCalcSafeCountActiveBlocks($calcSafeCountActiveBlocks)
    {
        $this->calcSafeCountActiveBlocks = $calcSafeCountActiveBlocks;

        return $this;
    }

    /**
     * Get calcSafeCountActiveBlocks
     *
     * @return integer 
     */
    public function getCalcSafeCountActiveBlocks()
    {
        return $this->calcSafeCountActiveBlocks;
    }

    /**
     * Set calcSubrentCountActiveBlocks
     *
     * @param integer $calcSubrentCountActiveBlocks
     * @return CIndustry
     */
    public function setCalcSubrentCountActiveBlocks($calcSubrentCountActiveBlocks)
    {
        $this->calcSubrentCountActiveBlocks = $calcSubrentCountActiveBlocks;

        return $this;
    }

    /**
     * Get calcSubrentCountActiveBlocks
     *
     * @return integer 
     */
    public function getCalcSubrentCountActiveBlocks()
    {
        return $this->calcSubrentCountActiveBlocks;
    }
}
