using System.Text.Encodings.Web;
using Microsoft.AspNetCore.Mvc;

namespace KorteBroeken.Controllers
{
    public class KortebroekController : Controller
    {

        public IActionResult Index()
        {
            return View();
        }
        public IActionResult WeerCheck()
        {
            return View();
        }


        public string Weer(int temperatuur, int regenkans, int ID = 0)
        {
            if (ID == 3)
            {
                return "Welkom Teun, jij kunt ALTIJD een korte broek aan";
            }
            else if (temperatuur > 20 && regenkans < 50)
            {
                return "Ja, je kunt vandaag een korte broek aan!";
            }
            else
            {
                return "Nee, je kunt vandaag helaas geen korte broek aan.";
            }
        }
    }
}

