using Microsoft.AspNetCore.Mvc;

namespace Bootstrappje.Controllers
{
    public class ResponsiveController : Controller
    {
        public IActionResult Index()
        {
            return View();
        }
    }
}
