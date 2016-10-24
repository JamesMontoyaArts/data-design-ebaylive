<?php
/**
* Cross section of eBay Live company profile
*
* This is just one company that serves as an auction house through eBay Live.  It can easily be used to create new companies as they are added to eBay Live
*
* @author James Montoya <jmontoya306@cnm.edu>
*
**/

class Company {

	/**
	 * id for the company selling their catalog of lots; this is the primary key
	 * @var int $companyId
	 **/
	private $companyId;

	/**
	 * logo of the company selling the catalog of lots;
	 * @var string $companyLogo
	 **/
	private $companyLogo;

	/**
	 *address of the company selling the catalog of lots;
	 * @var string $companyAddress
	 **/
	private $companyAddress;

	/**
	 *buyer premium is the price on top of the selling price that the winner owes the "company" who sold the lots;
	 * @var int $companyBuyerPremium
	 **/
	private $companyBuyerPremium;

	/**
	 *shipping policy is the shipping standards followed by the "company"
	 * @var string $companyShippingPolicy
	 **/
	private $companyShippingPolicy;

	/**
	 *payment policy is the standard payment policy followed by the "company" and is agreed to be followed by the user
	 * @var string $companyPaymentPolicy
	 **/
	private $companyPaymentPolicy;

	// CONSTRUCTION GOES HERE LATER

	/**
	 * accessor method for company id
	 *
	 * @return int|null value of company id
	 */
	public function getCompanyId() {
		return $this->companyId;
	}

	/**
	 * mutator method for company Id
	 *
	 * @param int $newCompanyId new value of company Id
	 * @throws UnexpectedValueException if $newCompanyId is not an integer
	 */
	public function setCompanyId($newCompanyId) {
		$newCompanyId = filter_var($newCompanyId, FILTER_VALIDATE_INT);
		if($newCompanyId === false)	{
			throw(new UnexpectedValueException("Company Id is not a valid integer"));
		}

		//Convert and store the company id
		$this->companyId = intval($newCompanyId);
	}


	/**
 	* accessor method for company logo
 	*
 	* @return string of company logo
 	*/
	public function getCompanyLogo() {
		return $this->companyLogo;
	}

	/**
	 * mutator method for company logo
	 *
	 * @param string $newCompanyLogo new string of company logo
	 * @throws UnexpectedValueException if $newCompanyLogo is not a string
	 */
	public function setCompanyLogo($newCompanyLogo) {
		$newCompanyLogo = filter_input($newCompanyLogo, FILTER_SANITIZE_STRING);
		if($newCompanyLogo === false)	{
			throw(new UnexpectedValueException("Company Logo not valid"));
		}

		//Convert and store the company logo
		$this->companyLogo = imagestring($newCompanyLogo);
	}


	/**
 	* accessor method for company address
 	*
 	* @return string for company address
 	*/
	public function getCompanyAddress() {
		return $this->companyAddress;
	}

	/**
	 * mutator method for company address
	 *
	 * @param string $newCompanyAdress new string of company address
	 * @throws UnexpectedValueException if $newCompanyAddress is not a string
	 */
	public function setCompanyAddress($newCompanyAddress) {
		$newCompanyAddress = filter_input($newCompanyAddress, FILTER_SANITIZE_STRING);
		if($newCompanyAddress === false)	{
			throw(new UnexpectedValueException("Company Address Invalid"));
		}

		//Convert and store the company address
		$this->companyAddress = string($newCompanyAddress);
	}

	/**
	 * accessor method for company buyer premium
	 *
	 * @return int for company buyer premium
	 */
	public function getCompanyBuyerPremium() {
		return $this->companyBuyerPremium;
	}

	/**
	 * mutator method for company buyer premium
	 *
	 * @param int $newCompanyBuyerPremium new value of company buyer premium
	 * @throws UnexpectedValueException if $newCompanyBuyerPremium is not an integer
	 */
	public function setCompanyPremium($newCompanyBuyerPremium) {
		$newCompanyBuyerPremium = filter_var($newCompanyBuyerPremium, FILTER_VALIDATE_INT);
		if($newCompanyBuyerPremium === false)	{
			throw(new UnexpectedValueException("Company Buyer Premium is not a valid integer"));
		}

		//Convert and store the company buyer premium
		$this->companyBuyerPremium = intval($newCompanyBuyerPremium);
	}

	/**
	 * accessor method for company shipping policy
	 *
	 * @return string for company shipping policy
	 */
	public function getCompanyShippingPolicy() {
		return $this->companyShippingPolicy;
	}

	/**
	 * mutator method for company shipping policy
	 *
	 * @param string $newCompanyShippingPolicy new string of company policy
	 * @throws UnexpectedValueException if $newCompanyShippingPolicy is not a string
	 */
	public function setCompanyShippingPolicy($newCompanyShippingPolicy) {
		$newCompanyShippingPolicy = filter_input($newCompanyShippingPolicy, FILTER_SANITIZE_STRING);
		if($newCompanyShippingPolicy === false) {
			throw(new UnexpectedValueException("Company Shipping Policy Invalid"));
		}

		//Convert and store the company shipping policy
		return $this->companyShippingPolicy;
	}

	/**
	 * accessor method for company payment policy
	 *
	 * @return string for company payment policy
	 */
	public function getCompanyPaymentPolicy() {
		return $this->companyPaymentPolicy;
	}

	/**
	 * mutator method for company payment policy
	 *
	 * @param string $newCompanyPaymentPolicy new string of company payment
	 * @throws UnexpectedValueException if $newCompanyPaymentPolicy is not a string
	 */
	public function setCompanyPaymentPolicy($newCompanyPaymentPolicy) {
		$newCompanyPaymentPolicy = filter_input($newCompanyPaymentPolicy, FILTER_SANITIZE_STRING);
		if($newCompanyPaymentPolicy === false) {
			throw(new UnexpectedValueException("Company Payment Policy Invalid"));
		}

		//Convert and store the company payment policy
		return $this->companyPaymentPolicy;
	}
}





