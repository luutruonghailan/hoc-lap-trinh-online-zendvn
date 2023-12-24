#include <iostream>
#include <string>
using namespace std;

int main()
{
    int number = 23;
    string result = "Không giải mã được";
    string dateVi[] = {"", "", "Thứ hai", "Thứ ba", "Thứ tư", "Thứ năm", "Thứ sáu", "Thứ bảy", "Chủ nhật"};
    string dateEn[] = {"", "", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"};
    int lang = number / 10;
    int day = number % 10;

    if (day >= 2 && day <= 8)
    {
        switch (lang)
        {
        case 1:
            result = dateEn[day];
            break;
        case 2:
            result = dateVi[day];
            break;
        }
    }

    cout << result << endl;

    return 0;
}