import React from "react";
import "./SearchBar.css";
class SearchBar extends React.Component {
  state = { searchTerm: "" };
  onSubmit = event => {
    event.preventDefault();
    this.props.onSubmit(this.state.searchTerm);
  };

  onSearch = event => {
    this.setState({ searchTerm: event.target.value });
  };
  render() {
    return (
      <div>
        <form onSubmit={this.onSubmit}>
          <input
            className="searchbar"
            type="text"
            placeholder="Zoek hier op jaartal"
            onChange={this.onSearch}
            value={this.state.searchTerm}
          />
        </form>
      </div>
    );
  }
}

export default SearchBar;
