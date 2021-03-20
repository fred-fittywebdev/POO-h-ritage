<?php
require_once 'Vehicle.php';


class Truck extends Vehicle
{


    const ALLOWED_ENERGIES = [

        'fuel',

        'electric',

    ];
    /**

     * @var string

     */

    private $energy;


    /**

     * @var int

     */

    private $capcityLoading;

    /**

     * @var int

     */

    private $loading = 0;





    public function __construct(string $color, int $nbSeats, string $energy, int $capcityLoading)

    {

        parent::__construct($color, $nbSeats);

        $this->energy = $energy;
        $this->capcityLoading = $capcityLoading;;
    }



    public function getEnergy(): string

    {

        return $this->energy;
    }


    public function setEnergy(string $energy): Truck

    {

        $this->energy = $energy;
        if (in_array($energy, self::ALLOWED_ENERGIES)) {

            $this->energy = $energy;
        }

        return $this;
    }


    public function getCapacityLoading(): int

    {

        return $this->capcityLoading;
    }


    public function setCapacityLoading(int $capcityLoading): void

    {

        $this->capacityLevel = $capcityLoading;
    }


    /**
     * Get the value of loading
     */
    public function getLoading()
    {
        return $this->loading;
    }

    /**
     * Set the value of loading
     *
     * @return  self
     */
    public function setLoading($loading)
    {
        $this->loading = $loading;

        return $this;
    }


    public static function is_full(Truck $truck): string
    {
        if ($truck->getLoading() < $truck->getCapacityLoading()) {
            return 'Status: <strong>in filling,</strong> you can add more stuffs';
        }
        return 'Status: <strong>full,</strong> NO MORE SPACE !';
    }
}