import React from 'react'

class NewTask extends React.Component{

    constructor(props) {
        super(props)
        this.state = {id:0, name:""}
        this.handleClick = this.handleClick.bind(this)
        this.routineEnterKey = this.routineEnterKey.bind(this);
        this.handleChange = this.handleChange.bind(this)
    }

    handleClick() {
        this.setState(prevState => {
            return {
                id: prevState.id+1
            }
        })
        var name = document.getElementById("inputText")
        this.props.list.push({text:name.value, key:this.state.id})
        this.props.addTask(this.props.list)
        this.setState({
            name:''
        })
    }

    handleChange(e){
        this.setState({
            name: e.target.value
          });
    }

    routineEnterKey(e) {
        if (e.key === "Enter") {
            this.handleClick()
        }
    }

    render() {
    return(
    <div className="filterstyle">
        <input id="inputText" type="text" onChange={this.handleChange}
         value={this.state.name} onKeyDown={this.routineEnterKey}/>
        <input type="button" value="Add" 
        onClick={this.handleClick}/>
    </div>
    )
    }
}

export default NewTask