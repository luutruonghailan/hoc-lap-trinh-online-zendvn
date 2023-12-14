#include <iostream>
using namespace std;
int main()
{
    /*
     1 
    212
   32123
    */
    int number = 1;
    string recode = "";
    string result = "";
    string space = "";
    string  left = "";
    string  right = "";

    while (number <= 3)
    {
        string space = "";
        string  left = "";
        string  right = "";
        for (int s = 1; s <= 3- number; s++)
        {
            space += s;
        }
        for (int l = 2; l <= number; l++)
        {
            left += l;
        }
         for (int r = 2; r <= number; r++)
        {
            right += r;
        }
        recode = space + left + "1" + right;
        result = result + recode;
        cout << result << "\n";

        number++;
    }
}