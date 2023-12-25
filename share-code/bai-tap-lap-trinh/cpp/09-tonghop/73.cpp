#include <iostream>

using namespace std;

int main()
{
    string id = "69";
    string str = "69,  1,   69 , 169 ";
    // 69,  1,   69 , 169 ,
    // ,   69,  1,   69 , 169
    string strNoSpace = "";
    string strId = "";
    int count = 0;

    // remove space
    for (char character : str)
    {
        if (!isspace(character))
        {
            strNoSpace += character;
        }
    }

    strNoSpace += ",";

    int length = strNoSpace.length();
    cout << "strNoSpace: " << strNoSpace << endl;

    for (int i = 0; i < length; i++)
    {
        if (strNoSpace[i] == ',')
        {
            if (id.compare(strId) == 0)
            {
                count++;
            }
            strId = "";
            continue;
        }
        else
        {
            strId += strNoSpace[i];
        }
    }

    cout << "ID " << id << " xuất hiện " << count << " lần";
}