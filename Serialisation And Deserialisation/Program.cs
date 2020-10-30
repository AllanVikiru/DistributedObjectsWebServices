// Q1 - Write code for seralisation and deserialisation of XML data

// part 2 - use XMLSerializer to serialise and deserealise XML files


using System;
using System.Collections.Generic; //include List data type
using System.Xml.Serialization; //includes XMLSerializer
using System.IO; // include StreamWriter for writing into files

namespace SerialisationAndDeserialisation
{
    class Program
    {
        static void Main(string[] args){
           // Country List Serialisation
            try
            {
                List<Country> listCountries = new List<Country>(); //create Country List variable
                //add 3 countries
                listCountries.Add ( 
                    new Country{
                        Id = "C01",
                        Name = "Kenya",
                        Region = "East Africa",
                        population = new Population{
                            Year = "2019",
                            People = 47564296
                        },
                        information = new Information{
                            Capital = "Nairobi",
                            Currency = "KES",
                            Calling = "+254"
                        }
                    }
                );
                listCountries.Add ( 
                    new Country{
                        Id = "C02",
                        Name = "Senegal",
                        Region = "West Africa",
                        population = new Population{
                            Year = "2016",
                            People = 14668522
                        },
                        information = new Information{
                            Capital = "Dakar",
                            Currency = "CFA franc",
                            Calling = "+221"
                        }
                    }
                );
               listCountries.Add ( 
                    new Country{
                        Id = "C03",
                        Name = "Mozambique",
                        Region = "Southern Africa",
                        population = new Population{
                            Year = "2017",
                            People = 27909798
                        },
                        information = new Information{
                            Capital = "Maputo",
                            Currency = "MZN",
                            Calling = "+258"
                        }
                    }
                );
                XmlSerializer xmlSerializer = new XmlSerializer(typeof(List<Country>)); //create new xmlSerializer object from country list
                StreamWriter sw = new StreamWriter("country_list.xml"); // create new file using StreamWriter object
                xmlSerializer.Serialize(sw,listCountries); //serialise list data into file
                sw.Close(); //finish writing into file
                Console.WriteLine("Serialisation Complete");
            }
            catch (Exception ex)
            {
                Console.WriteLine(ex.Message);
            }
            
         // Country List Deserialisation
            try {
                XmlSerializer xmlSerializer = new XmlSerializer(typeof(List<Country>)); //create new xmlSerializer object from country list
                StreamReader sr = new StreamReader("country_list.xml"); //read from XML file
                List<Country> listCountries = (List<Country>)xmlSerializer.Deserialize(sr); //deserialise from file as a list type of countries
                // output country information in list
                foreach ( Country country in listCountries){
                    Console.WriteLine("****Country Description**** (source: Wikipedia)");
                    Console.WriteLine("Id: " + country.Id);
                    Console.WriteLine("Name: " + country.Name);
                    Console.WriteLine("Population: " + country.population.People);
                    Console.WriteLine("Population Year: " + country.population.Year);
                    Console.WriteLine("Capital City: " + country.information.Capital);
                    Console.WriteLine("Currency Code: " + country.information.Currency);
                    Console.WriteLine("Calling Code: " + country.information.Calling);
                    Console.WriteLine("--------------------------------------");
                }
            }
            catch(Exception ex){
                Console.WriteLine(ex.Message);
            }
        }
    }
}