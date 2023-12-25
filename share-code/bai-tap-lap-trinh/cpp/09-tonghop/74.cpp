#include <iostream>
#include <vector>

using namespace std;

bool isNumber(string inputStr)
{
    try
    {
        stoi(inputStr);
        return true;
    }
    catch (const std::exception &e)
    {
        return false;
    }
}

int main()
{
    // string str = "php/12/java/140/frontend/30/javascript/15";
    string str = "php/12/java/140/frontend/30/javascript/15/python/140";
    int strLength = str.length();
    vector<string> vInfo;
    string item = "";
    bool isSlash = false;
    int maxTime = -1;
    int maxTimeIdx = -1;

    for (int i = 0; i < strLength; i++)
    {
        char character = str[i];
        if (character == '/')
        {
            isSlash = true;
        }
        else
        {
            item += character;
        }

        if (isSlash || i == strLength - 1)
        {
            if (isNumber(item) && stoi(item) > maxTime)
            {
                maxTime = stoi(item);
                maxTimeIdx = vInfo.size();
            }
            vInfo.push_back(item);
            isSlash = false;
            item = "";
        }
    }

    for (int i = maxTimeIdx; i < vInfo.size(); i = i + 2)
    {
        if (stoi(vInfo[i]) == maxTime)
        {
            cout << vInfo[i - 1] << ": " << maxTime << endl;
        }
    }

    return 0;
}
