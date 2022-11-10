using System;

namespace Swap
{
    class MainClass
    {
        public static void Main(string[] args)
        {
            int a = 10;
            int b = 2;

            (a, b) = (b, a);

            Console.WriteLine(a);
            Console.WriteLine(b);

        }
    }
}