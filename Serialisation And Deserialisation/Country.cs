// Q1 - Write code for seralisation and deserialisation of XML data

// part 1 - define classes for data attributes and elements

using System.Xml.Serialization; //import Serialisation library 

namespace SerialisationAndDeserialisation
{
    [XmlRoot("country")] // define core root element country
    public class Country
    {
        [XmlAttribute("id")] //define attribute ID
       public string Id{      
           get; // create getters and setters for variable
           set;
       }
       [XmlAttribute("name")] //define attribute name
       public string Name {
           get;
           set;
       }
        [XmlElement("region")] //define child element name 
        public string Region {
           get;
           set;
       }
        [XmlElement("population")] //define level 1 child element population
         public Population population {
             get;
             set;
       }

       [XmlElement("information")] //define level 1 child element description
         public Information information {
             get;
             set;
       }
    }

    [XmlRoot("population")] //redefine population as root to set its child attribute (year) and variable (people)
    public class Population {
        [XmlAttribute("year")] //define attribute year
        public string Year { 
           get;
           set;
       }
       [XmlText]
        public int People { //define population value 'People'
           get;
           set;
       }
    }

    [XmlRoot("information")] //redefine information as root to set its child attributes (capital city, currency code, calling code)
    public class Information{
        [XmlElement("capital")] //define attribute capital
        public string Capital {
           get;
           set;
       }
       [XmlElement("currency")] //define attribute currency code
        public string Currency {
           get;
           set;
       }
       [XmlElement("calling")]//define attribute calling code
        public string Calling {
           get;
           set;
       }

    }

}
        