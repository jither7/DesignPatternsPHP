<?phpnamespace DesignPattersPHP\Creational\AbstractFactory;abstract class Text{    /**     * @var string     */    private $text;    public function __construct(string $text)    {        $this->text = $text;    }    public function getInfo() {    }}