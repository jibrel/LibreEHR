<?php
/**
 * pre Measure 0394 -- Population Criteria 1
 *
 * Copyright (C) 2016      Suncoast Connection
 * @package PQRS_Gateway 
 * @link    http://suncoastconnection.com
 * @author  Bryan lee <bryan@suncoastconnection.com>
 * @author  Art Eaton <art@suncoastconnection.com>
 */
 
class pre_0394_PopulationCriteria1 implements PQRSPopulationCriteriaFactory
{
    public function getTitle()
    {
        return "Population Criteria";
    }
    
    public function createInitialPatientPopulation()
    {
        return new pre_0394_InitialPatientPopulation1();
    }
    
    public function createNumerators()
    {
        return new pre_0394_Numerator1();
    }
    
    public function createDenominator()
    {
        return new pre_0394_Denominator1();
    }
    
    public function createExclusion()
    {
        return new pre_0394_Exclusion1();
    }
}

?>